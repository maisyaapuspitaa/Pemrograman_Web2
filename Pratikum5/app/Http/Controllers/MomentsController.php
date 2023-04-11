<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MomentsController extends Controller
{
    public function index()
    {
        return view('moments');
    }

}
