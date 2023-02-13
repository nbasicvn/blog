<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function privacyVNCalendar()
    {
        return view('page.privacy.index');
    }
}
