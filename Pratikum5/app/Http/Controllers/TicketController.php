<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;
use App\Models\Ticket;

class TicketController extends Controller
{
    public function index()
    {
        $data['ticket'] = \DB::select('SELECT * FROM ticket');
        return view('ticket', $data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tambahTicket');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $nameInput = $request->input('nameInput');
        $alamatInput = $request->input('alamatInput');
        $ticketInput = $request->input('ticketInput');
        $dateInput = $request->input('dateInput');


        // dd($request->input(''));


        $query = \DB::table('ticket')->insert([
            'name' => $nameInput,
            'alamat' => $alamatInput,
            'ticket' => $ticketInput,
            'date' => $dateInput
        ]);


        if ($query) {
            return redirect()->route('ticket')->with('success', 'Data Berhasil Ditambahkan');
        } else {
            return redirect()->route('ticket')->with('failed', 'Data Gagal Ditambahkan');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('ticket');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data['ticket'] = \DB::table('ticket')->where('id', $id)->first();


        return view('editTicket', $data);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {   
        $nameInput = $request->input('nameInput');
        $alamatInput = $request->input('alamatInput');
        $ticketInput = $request->input('ticketInput');
        $dateInput = $request->input('dateInput');

        $query = \DB::table('ticket')->where('id', $id)->update([
            'name' => $namaInput,
            'alamat' => $alamatInput,
            'ticket' => $ticketInput,
            'date' => $dateInput
        ]);
        if ($query) {
            return redirect()->route('ticket')->with('success', 'Data Berhasil Diupdate');
        } else {
            return redirect()->route('ticket')->with('failed', 'Data Gagal Diupdate');
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $query = \DB::table('ticket')->where('id', $id)->delete();
        if ($query) {
            return redirect()->route('ticket')->with('success', 'Data Berhasil Dihapus');
        } else {
            return redirect()->route('ticket')->with('failed', 'Data Gagal Dihapus');
        }
    }
}
