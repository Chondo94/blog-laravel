<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class Hello extends Controller {

  public function hello($name){
    return view('hello', ["name" => $name]);
  }
}

 ?>
