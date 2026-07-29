<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index() // -> buat functiom baru dengan nama index
    {
        return "ini adalah halaman daftar siswa"; // -> yang memakai class function index bakalan ngereturn ini di webnya
    }

    public function show(string $id) // -> sama seperti yang diatas, cuma tambahin attribute string $idnya
    {
        return "menampilkan detail siswa dengan id : {$id}";
    }

    public function edit(string $id){
        return "ini adalah halaman mengedit data siswa dari id : {$id}";
    }

    public function create(){
        return "ini adalah halaman menambahkan siswa";
    }

    public function store(){
        return "menambahkan data siswa baru";
    }

    public function update(string $id){
        return "siswa dengan id : {$id} sudah diupdate";
    }

    public function delete(string $id){
        return "menghapus siswa dengan id : {$id}";
    }
}
