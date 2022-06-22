<?php

namespace App\Http\Controllers;

use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;

class HomeController extends Controller {
  public function index() {
    return view('cms.page.index', [
      'title' => "DKBM UMN",
      'language' => "English"
    ]);
  }

  public function indexid() {
    return view('cms.page.index-id', [
      'title' => "DKBM UMN",
      'language' => "Indonesia"
    ]);
  }
}
