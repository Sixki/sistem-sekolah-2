<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "ini adalah halaman Jurusan";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "ini adalah halaman Jurusan";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "menyimpan Jurusan";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "menampilkan data Jurusan dengan id: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "ini adalah halaman edit Jurusan dengan ID: {$id}";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "mengubah data Jurusan dengan id: {$id}";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "menghapus data Jurusan dari id: {$id}";
    }
}
