<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

}
