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
  } // END OF TESTPAGE FUNCTION

  public function home() {

    $data = [
      [
        'title' => 'titolo 1',
        'desc' => 'desc 1'
      ],
      [
        'title' => 'titolo 2',
        'desc' => 'desc 2'
      ],
      [
        'title' => 'titolo 3',
        'desc' => 'desc 3'
      ],
      [
        'title' => 'titolo 4',
        'desc' => 'desc 4'
      ]
    ];

    return view('pages.home', compact("data"));
  } // END OF HOME FUNCTION

  public function elem($index) {
    $data = [
      [
        'title' => 'titolo 1',
        'desc' => 'desc 1'
      ],
      [
        'title' => 'titolo 2',
        'desc' => 'desc 2'
      ],
      [
        'title' => 'titolo 3',
        'desc' => 'desc 3'
      ],
      [
        'title' => 'titolo 4',
        'desc' => 'desc 4'
      ]
    ];

    $dataIndex = $data[$index];
    return view('pages.elem', compact('dataIndex'));

  } // END OF ELEM FUNCTION

}
