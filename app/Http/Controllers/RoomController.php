<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoomController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    $rooms = [
        ['id' => 1, 'code' => 'IF-301', 'name' => 'Ruang Mektan 3.1', 'building' => 'Gedung Mektan', 'capacity' => 40, 'status' => 'Tersedia'],
        ['id' => 2, 'code' => 'IF-302', 'name' => 'Ruang H17', 'building' => 'Gedung H', 'capacity' => 50, 'status' => 'Terpakai'],
        ['id' => 3, 'code' => 'IF-405', 'name' => 'Ruang H5', 'building' => 'Gedung H', 'capacity' => 30, 'status' => 'Tersedia'],
    ];

    return view('rooms.index', compact('rooms'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
