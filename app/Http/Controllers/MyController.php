<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller {

  private function getNumbers() {

    $arr = [];
    for ($i = 0; $i < 10 ; $i++) {

      $arr[] = $i;
    }
    return $arr;
  }

  private function getLetters() {

    $arr = range("A", "Z");
    foreach ($arr as $letter) {
    }

    return $arr;
  }

  public function getNumbersCube() {

    $arrNum = $this -> getNumbers();

    return view("number", compact("arrNum"));
  }

  public function getLettersCube() {

    $arrLetters = $this -> getLetters();

    return view("letter", compact("arrLetters"));
  }
}
