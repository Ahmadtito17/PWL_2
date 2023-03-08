<?php

namespace App\Http\Controllers;

use App\Models\MatkulModel;
use Illuminate\Http\Request;

class MatkulController extends Controller
{
    public function index(){
        $matkul = MatkulModel::all();
        return view('matkul')
             ->with('matkul', $matkul);
    }
}
