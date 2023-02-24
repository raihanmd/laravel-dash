<?php

namespace App\Http\Controllers\sekolah;

use App\Http\Controllers\Controller;
use App\Models\AutoRespond;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Informasi extends Controller
{
  public function index()
  {
    return view('content.sekolah.sekolah-informasi', [
      "data"=> DB::table('setting')->where('typeautorespon', 'pesansingkat')->get()
    ]);
  }
}
