<?php

namespace App\Console\Commands;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class AddUserCommand extends Command
{

//php artisan user:create -u myusername -e michael@gmail.com

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:create {--u|username= : Username of the newly created user.} {--e|email= : E-Mail of the newly created user.}
    {--p|password= : Password of the newly created user.}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates a new user using the command.';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $username = $this->option('username');
        if ($username === null) {
            $username = $this->ask('Please enter your username.');
        }

        $email = $this->option('email');
        if ($email === null) {
            $email = $this->ask('Please enter your E-Mail.');
        }

        $password = $this->secret('Please enter a password.');

        $input = [
            'username' => $username,
            'email' => $email,
            'password' => Hash::make($password),
        ];

        $validator = \Validator::make($input, (new LoginRequest())->rules());

        if ($validator->fails()) {
            foreach ($validator->errors()->all() as $error) {
                $this->error($error);
            }
            return 1;
        }

        try {
        $user = User::create($input);
        }
        catch (\Exception $e) {
            $this->error($e->getMessage());
            return;
        }

        $this->info('User created successfully!');
        $this->info('User Id: ' . $user->id);
    }
}
