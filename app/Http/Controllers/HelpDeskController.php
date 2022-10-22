<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelpDeskController extends Controller
{
  public function index (Request $request) {
    
    return view('help-desk');
  }
}
