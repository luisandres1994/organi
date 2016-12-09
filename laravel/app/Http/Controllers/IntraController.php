<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class IntraController extends Controller
{
    //
    public function index()
    {
         return view('sae');
    }
}
