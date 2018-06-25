# Monitoring your Laravel background queues in realtime using Pusher and Vue
This is a sample on how you can monitor your Laravel background queues in realtime using Pusher.

[![Get help on Codementor](https://cdn.codementor.io/badges/get_help_github.svg)](https://www.codementor.io/neoighodaro?utm_source=github&utm_medium=button&utm_term=neoighodaro&utm_campaign=github)

[View tutorial](https://pusher.com/tutorials/monitoring-laravel-background-queues)

![](https://www.dropbox.com/s/dd2w0m8k77ucra6/Monitoring-Laravel-Background-Queues-in-realtime-using-Pusher.gif?raw=1)

## Getting Started
- Download or clone the project.
- Rename the `.env.example` file to `.env`.
- Update the `PUSHER_APP_*` keys in the `.env` file.
- Set up a [Mailtrap](https://mailtrap.io) account and update the keys in the `.env` file.
- Update the `DB_*` keys in the `.env` file so it connects to a database.
- Open the `config/broadcasting.php` and set the `cluster` for your Pusher application.
- Run the command `php artisan migrate` to migrate the database.
- Run the command `npm install` to install the frontend dependencies includine Vue.
- Run the command `npm run prod` to build our assets.
- Run the command `php artisan serve` to start the PHP application.
- In a separate Terminal window, run the command `php artisan queue:listen` to listen for queued events.


### Requirements
- PHP 7.0+ installed on your machine.
- [Laravel CLI](https://laravel.com/docs/5.5/installation) installed on your machine.
- [Composer](https://getcomposer.org/doc/00-intro.md#installation-linux-unix-osx) installed on your machine.
- Knowledge of PHP and Laravel.
- [Node.js and NPM](https://docs.npmjs.com/getting-started/installing-node) installed on your machine.
- Basic knowledge of Vue.js and JavaScript.
- A Pusher application. Create one [here](https://pusher.com).
- A Mailtrap account to test emails sent. Create one [here](https://mailtrap.io).
