<?php

namespace App\Mail;

use App\QueuedEmails;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use App\Events\{EmailQueued, EmailSent};
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Contracts\Queue\Factory as Queue;
use Illuminate\Contracts\Mail\Mailer as MailerContract;

class SimulateMail extends Mailable implements ShouldQueue
{
    use Queueable, SerializesModels;

    protected $mail;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(array $mail)
    {
        $this->mail = QueuedEmails::create($mail);
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->subject("Queuer: Welcome to queuer")->view('email.welcome');
    }

    public function send(MailerContract $mailer)
    {
        $this->mail->update(['run' => true]);

        event(new EmailSent($this->mail));

        parent::send($mailer);
    }

    public function queue(Queue $queue)
    {
        event(new EmailQueued($this->mail));

        return parent::queue($queue);
    }
}
