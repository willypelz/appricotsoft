<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SuccessController extends Controller
{
    //
    /**
     * @param Request $request
     * @return string
     */
    public function dashboard(Request $request): string
    {
        $user = Auth::user();
        return 'Congrats! You are logged in as: ' . $user->username .
            "<a href=" . route('logout') . ">Logout</a>";
    }
}
