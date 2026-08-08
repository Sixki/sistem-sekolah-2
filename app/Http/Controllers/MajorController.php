<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MajorController extends Controller
{
    
    public function index()
    {
        $title = 'Sistem Sekolah - Daftar Mapel';
        $majors = [
        [
            'id' => 1,
            'code' => 'AKL',
            'name' => 'Akuntansi dan Keuangan Lembaga',
            'description' => 'Program keahlian yang membekali murid dengan kompetensi pencatatan dan pelaporan keuangan.',
        ],
        [
            'id' => 2,
            'code' => 'TKJ',
            'name' => 'Teknik Komputer dan Jaringan',
            'description' => 'Program keahlian yang membekali murid dengan kompetensi instalasi, konfigurasi, dan pemeliharaan jaringan komputer.',
        ],
        [
            'id' => 3,
            'code' => 'BD',
            'name' => 'Bisnis Digital',
            'description' => 'Program keahlian yang membekali murid dengan kompetensi pemasaran dan pengelolaan bisnis berbasis digital.',
        ],
    ];
        return view('majors.index', [
            'title' => $title, 'majors' => $majors,
            
                'majors' => $majors,
        ]);


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
