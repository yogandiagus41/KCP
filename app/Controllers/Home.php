<?php

namespace App\Controllers;

class Home extends BaseController
{
  public function index()
  {
    $Data = [
      'Url' => "Dashboard"
    ];
    return view("Tamplate", $Data);
  }
}