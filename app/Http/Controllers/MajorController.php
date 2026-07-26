<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        return "Ini adalah halaman index dari student controller";
    }

    public function show(string $id)
    {
        return "Menampilkan detail jurusan dengan ID: {$id}/>";
    }

    public function create()
    {
        return "Ini adalah halaman jurusan/>";
    }

    public function edit(string $id)
    {
        return "Ini adalah halaman edit jurusan dengan ID: {$id}/>";
    }
    public function store()
    {
        return "Menambah data jurusan baru/>";
    }

    public function update(string $id)
    {
        return "Mengupdate data jurusan dengan ID: {$id}/>";
    }

    public function destroy(string $id)
    {
        return "Menghapus data jurusan dengan ID: {$id}/>";
    }
}
