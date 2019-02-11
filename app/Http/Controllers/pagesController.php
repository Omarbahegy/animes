<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


class pagesController extends Controller
{
    public function index()
    {
        return View('pages.home');
    }

    public function blog()
    {
        return View('pages.blog');
    }
}
