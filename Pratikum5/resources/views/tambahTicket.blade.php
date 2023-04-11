<style>
   .text-center{
    margin-top: 50px;
   }
</style>
@extends('layouts.main')
@section('container')

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    <h3 class="text-center">Tambah Ticket</h3>
        <div class="container ">
            <div class="row justify-content-center">
                <div class="col-md-5 border rounded mt-2">
                    <form action="{{ route('ticket.store')}}" method="POST">
                        @csrf
                
                        <div class="mb-3">
                            <label for="name_input" class="form-label">Name</label>
                            <input type="text" class="form-control" name="nameInput" id="name_input">
                        </div>
                        <div class="mb-3">
                            <label for="alamat_input" class="form-label">Address</label>
                            <input type="text" class="form-control" id="alamat_input" name="alamatInput" >
                        </div>
                        <div class="mb-3">
                            <label for="ticket_input" class="form-label">Jumlah Tiket</label>
                            <input type="number" class="form-control" id="ticket_input" name="ticketInput" >
                        </div>
                        <div class="mb-3">
                            <label for="date_input" class="form-label">Date</label>
                            <input type="date" class="form-control" id="date_input" name="dateInput" >
                        </div>                 
                        <div class="row mx-2">
                            <button type="submit" class="btn btn-primary mb-3">Tambah</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    @endsection