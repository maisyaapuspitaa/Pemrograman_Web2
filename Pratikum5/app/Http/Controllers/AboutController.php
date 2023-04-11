<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class AboutController extends Controller
{
    public function index()
    {
        return view('about');
    }
}
