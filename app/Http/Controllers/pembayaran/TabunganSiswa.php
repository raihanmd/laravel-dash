<?php

namespace App\Http\Controllers\pembayaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TabunganSiswa extends Controller
{
    public function index(){
      return view('content.pembayaran.pembayaran-tabungan');
    }
}
