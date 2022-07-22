<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeesController extends Controller
{
    public function index($user)
    {
        //dd(App/Models/User::find($user));
        return view('home');
    }



}
