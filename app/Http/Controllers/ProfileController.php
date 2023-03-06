<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view ('profile')
            ->with('nama', 'Ahmad Tito Nur Hendrawan')
            ->with('nim', '2141720265')
            ->with('prodi', 'D-IV Teknik Informatika')
            ->with('jurusan', 'Teknologi Informasi')
            ->with('pt', 'Politeknik Negeri Malang');
    }
}
