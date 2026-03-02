<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return 'Welcome';
    }

    public function about()
    {
        return 'NIM : 244107020070, Name : Raihan Zaky Ramadhan';
    }

    public function articles($id)
    {
        return 'Article Page with ID '.$id;
    }
}