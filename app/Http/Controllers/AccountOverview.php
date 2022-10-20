<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountOverview extends Controller
{
    public function index()
  {
    return view('account-overview');
  }
}
