<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome()
    {
        return view('pages.welcome');
    }

    public function login()
    {
        return view('pages.login');
    }


    public function subjects()
    {
        return view('subjects.subjects');
    }

    public function register()
    {
        return view('pages.register');
    }

    public function english()
    {
        return view('subjects.english.english');
    }

    public function maths()
    {
        return view('subjects.maths.maths');
    }

    public function computerscience()
    {
        return view('subjects.computerscience.computerscience');
    }


    public function cs210()
    {
        return view('subjects.computerscience.modules.cs210');
    }

    public function cs320()
    {
        return view('subjects.computerscience.modules.cs320');
    }

    public function cs357()
    {
        return view('subjects.computerscience.modules.cs320');
    }

    public function en101()
    {
        return view('subjects.english.modules.en101');
    }

    public function en203()
    {
        return view('subjects.english.modules.en203');
    }

    public function en260()
    {
        return view('subjects.english.modules.en260');
    }

    public function mt103()
    {
        return view('subjects.maths.modules.mt103');
    }

    public function mt201()
    {
        return view('subjects.maths.modules.mt201');
    }

    public function mt212()
    {
        return view('subjects.maths.modules.mt212');
    }

    public function profile()
    {
        return view('pages.profile');
    }
}
