<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
</style>
<body>
    @extends('layouts.main')
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
@endif
    @section('container')
    <a href="{{ route('ticket.create') }}" class="btn btn-success">Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Address</th>
                <th scope="col">Ticket</th>
                <th scope="col">Date</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
                $no = 1;
            @endphp


            @foreach ($ticket as $item)
            <tr>
                <th scope="row">{{ $no }}</th>
                <td>{{ $item->name }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->ticket }}</td>
                <td>{{ $item->date }}</td>
                <td>
                    <a href="{{ route('ticket.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('ticket.destroy',$item->id) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <form action="{{ route('ticket.destroy',$item->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger" onclick="confirm('Anda yakin akan meenghapus data ini?')">Hapus</button>
                </td>
            </tr>
            @php
                $no++;
            @endphp
            @endforeach
        </tbody>
    </table>
@endsection($ticket)
</body>
</html>