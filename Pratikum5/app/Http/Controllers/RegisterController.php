<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class RegisterController extends Controller
{
    public function show()
    {
        return view('register');
    }

    public function store(Request $request): RedirectResponse
    {
        $validator = $request->validate([
            'namaInput' => 'required',
            'alamatInput' => 'required',
            'emailInput' => 'required|email',
            'passwordInput' => 'required|min:8|confirmed',
        ]);
        $query = Ticket::create([
            'name' => $request->namaInput,
            'alamat' => $request->alamatInput,
            'email' => $request->emailInput,
            'password' => Hash::make($request->passwordInput)
        ]);
        if ($query) {
            return redirect()->route('login');
        }else{
            return redirect()->back();
        }
    }  
}

