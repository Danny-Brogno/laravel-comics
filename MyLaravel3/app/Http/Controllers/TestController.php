<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
  // QUI SI RITORNA SEMPRE QUALCOSA CHE STA DENTRO PAGES, MAI LE COSE CHE STANNO DENTRO LAYOUTS O COMPONENTS
  public function testPage() {

    $name = "Danny Brogno";
    $records = ["rec_1", "rec_2", "rec_3"];
    return view('vattelapesca', compact('name', 'records'));
  }

  public function home() {
    return view('pages.home');
  }

}
