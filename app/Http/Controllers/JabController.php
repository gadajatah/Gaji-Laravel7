<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;

class JabController extends Controller
{
    public function index()
    {
        $jabatan = Position::paginate(5);
        return view('jabatan.index',['jabatan' => $jabatan]);  
    }

}
