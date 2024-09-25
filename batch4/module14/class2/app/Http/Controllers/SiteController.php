<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    function HomePage()
    {
        $learnerVar=[
            ['fname'=>'Golam','lname'=>'Rabbil'],
            ['fname'=>'Abdus','lname'=>'Salam'],
            ['fname'=>'Abu','lname'=>'Said'],
            ['fname'=>'Mir','lname'=>'Mugdho']
        ];


        return view('page.home',['learnerKey'=>$learnerVar,'x'=>10,'y'=>40]);
    }










    function CoursesPage()
    {
        return view('page.courses');
    }
    function SignInPage()
    {
        return view('page.signin');
    }
    function SignUpPage()
    {
        return view('page.signup');
    }
    function AboutPage()
    {
        return view('page.about');
    }
}
