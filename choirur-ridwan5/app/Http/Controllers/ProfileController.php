<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\View\View as IlluminateView;

class ProfileController extends Controller
{
    public function index(){
        $nama = "Ridwan";
        $bio = "saya mahasiswa teknik informatika semester 5";
        $nim = "2024150043";
        return view('profile', compact('nama','bio','nim'));
    }
}
