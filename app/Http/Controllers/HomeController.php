<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('page.index', [
            'title' => "",
        ]);
    }

    public function indexid(){
        return view('page.index-id', [
            'title' => "",
        ]);
    }
}
