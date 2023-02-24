<?php

namespace App\Http\Controllers\pembayaran;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Spp extends Controller
{
    public function index(){
        return view('content.pembayaran.pembayaran-spp');
    }
}
