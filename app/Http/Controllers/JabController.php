<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;

class JabController extends Controller
{
    public function index()
    {
        $jabatan = Position::paginate(5);
        return view('jabatan.index',compact('jabatan'));  
    }
    public function show(Position $jabatan)
    {
        return view('jabatan.show',compact('jabatan'));
    }
    public function create()
    {
        return view('jabatan.create');
    }
    public function store(Request $request)
    {
        Position::create($request->all());

        return redirect()->to('positions');
    }

}
