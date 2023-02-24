<?php

namespace App\Http\Controllers\siswa;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DataNilai extends Controller
{
    public function index(){
        return view('content.siswa.siswa-data-nilai');
    }
}
