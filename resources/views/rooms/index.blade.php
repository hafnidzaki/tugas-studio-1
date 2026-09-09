@extends('layouts.app')

@section('title', 'Daftar Ruangan')

@section('content')
    <h3>Data Master Ruangan</h3>
    <a href="{{ route('rooms.create') }}">+ Tambah Ruangan</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Ruangan</th>
                <th>Gedung</th>
                <th>Kapasitas</th>
                <th>Status</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($rooms as $index => $room)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td><strong>{{ $room['code'] }}</strong></td>
                    <td>{{ $room['name'] }}</td>
                    <td>{{ $room['building'] }}</td>
                    <td>{{ $room['capacity'] }} Kursi</td>
                    <td>{{ $room['status'] }}</td>
                    <td>
                        <a href="{{ route('rooms.show', $room['id']) }}">Detail</a> | 
                        <a href="{{ route('rooms.edit', $room['id']) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection