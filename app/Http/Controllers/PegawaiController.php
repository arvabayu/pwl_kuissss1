<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index(){
        $pegawai = Pegawai::paginate(2);

        return view('pegawai', compact('pegawai'));
    }
}
