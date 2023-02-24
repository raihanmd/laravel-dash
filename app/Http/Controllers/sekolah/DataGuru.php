<?php

namespace App\Http\Controllers\sekolah;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataGuru extends Controller
{
    public function index(){
      return view('content.sekolah.sekolah-data-guru');
    }
}
