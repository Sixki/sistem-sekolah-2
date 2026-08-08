<?php

namespace App\Http\Controllers\SchoolClass;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateController extends Controller
{
    public function __invoke()
    {
        $title = 'sistem sekolah - tambah kelas';

        return view('Classes.create', [
            'title' => $title
        ]);
    }
}