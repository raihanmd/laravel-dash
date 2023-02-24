<?php

namespace App\Http\Controllers\siswa;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Kelas extends Controller
{
    public function index(){
      return view('content.siswa.siswa-kelas');
    }
}
