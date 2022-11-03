<?php

namespace App\Http;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserRepository
{
    /**
     * @var User
     */
    private $user;

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function processLogin($request)
    {
        try {
            $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
            if (auth()->attempt(array($fieldType => $request->username, 'password' => $request->password))) {
                $user = Auth::user();
                return 'Congrats! You are logged in as: ' . $user->username .
                    "<a href=" . route('logout') . ">Logout</a>";
            }
            return redirect()->route('login-page')->with('errorMessage', 'The credentials are
             incorrect.');

        } catch (\Exception $exception) {
            return redirect()->route('login-page')->with('errorMessage', 'Error, please try
            again.');
        }
    }

    public function logout()
    {
        \Auth::logout();
        return response()->view('index');
    }
}
