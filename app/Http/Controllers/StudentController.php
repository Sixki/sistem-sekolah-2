<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class StudentController extends Controller
{
    public function index()
    {

        $title = 'Sistem Sekolah - Daftar Siswa';
        $students = [
            ['id' => 1, 'nis' => '1001', 'name' => 'John Doe', 'class' => 'XII TKJ 2', 'major' => 'TKJ'],
            ['id' => 2, 'nis' => '1002', 'name' => 'Jane Smith', 'class' => 'XII TKJ 1', 'major' => 'TKJ'],
            ['id' => 3, 'nis' => '1003', 'name' => 'Michael Johnson', 'class' => 'XII TKJ 1', 'major' => 'BiD'],
        ];
        return view('students.index', [
            'title' => $title,
            'students' => $students,
        ]);
    }


    public function show(string $id)
    {
        $title = 'Sistem Sekolah - Detail Siswa';
        return view('students.show', [
            'title' => $title,
            'student' => ['id' => $id, 'name' => 'John Doe', 'age' => 20]
        ]);
    }

    public function create()
    {
        $title = 'Sistem Sekolah - Tambah Siswa';
        return view ('students.create', [
            'title' => $title
        ]);
    }

    public function edit(string $id)
    {
        $title = 'Sistem Sekolah - Edit Siswa';
        return view('students.edit', [
            'title' => $title,
            'student' => ['id' => $id, 'name' => 'John Doe', 'age' => 20]
        ]);
    }
    public function store()
    {
        return "Menambah data siswa baru/>";
    }

    public function update(string $id)
    {
        return "Mengupdate data siswa dengan ID: {$id}/>";
    }

    public function destroy(string $id)
    {
        return "Menghapus data siswa dengan ID: {$id}/>";
    }
}
