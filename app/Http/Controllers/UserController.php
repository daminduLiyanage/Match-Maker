<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Redirects to User Registration Page
     */
    public function userRegistration(){

    }

    public function login(){
        return view('login');
    }


}
