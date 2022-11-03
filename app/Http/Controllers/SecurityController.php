<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;

class SecurityController extends Controller
{
    //

    /**
     * @param Request $request
     * @return Application|Factory|View
     */
    public function index(Request $request)
    {
        return view('index');
    }

    /**
     * @param Request $request
     * \     */
    public function login(Request $request)
    {

        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
        if(auth()->attempt(array($fieldType => $request->username, 'password' => $request->password)))
        {
            $user = Auth::user();
            return 'Congrats! You are logged in as: ' . $user->username .
                "<a href=" .  route('logout') . ">Logout</a>";
        }

        return redirect()->route('page.landing-page')->with('errorMessage','The credentials are incorrect.');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {
        \Auth::logout();
        return response()->view('index');
    }
}
