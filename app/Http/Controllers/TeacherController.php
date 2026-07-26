<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TeacherController extends Controller
{

    public function index()
    {
        return "Ini adalah halaman index dari student controller";
    }

    public function show(string $id)
    {
        return "Menampilkan detail guru dengan ID: {$id}/>";
    }

    public function create()
    {
        return "Ini adalah halaman guru/>";
    }

    public function edit(string $id)
    {
        return "Ini adalah halaman edit guru dengan ID: {$id}/>";
    }
    public function store()
    {
        return "Menambah data guru baru/>";
    }

    public function update(string $id)
    {
        return "Mengupdate data guru dengan ID: {$id}/>";
    }

    public function destroy(string $id)
    {
        return "Menghapus data guru dengan ID: {$id}/>";
    }
}


