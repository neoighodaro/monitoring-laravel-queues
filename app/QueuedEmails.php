<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class QueuedEmails extends Model
{
    protected $fillable = ['description', 'run', 'email'];

    protected $casts = ['run' => "boolean"];

    public function add(string $description)
    {
        return static::create(['description' => $description, "run" => false]);
    }
}
