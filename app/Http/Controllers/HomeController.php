<?php

namespace App\Http\Controllers;

use Mail;
use App\QueuedEmails;
use App\Mail\SimulateMail;
use Faker\Factory as Faker;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->faker = Faker::create();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home', ['jobs' => $this->jobs()]);
    }

    /**
     * Return all the jobs.
     *
     * @return array
     */
    public function jobs()
    {
        return QueuedEmails::orderBy('created_at', 'DESC')->get()->toArray();
    }

    /**
     * Simulate sending the email.
     *
     * @return mixed
     */
    public function simulate()
    {
        $email = $this->faker->email;

        Mail::to($email)->send(
            new SimulateMail([
                "email" => $email,
                "description" => $this->faker->sentence()
            ])
        );

        return redirect()->route('home');
    }
}
