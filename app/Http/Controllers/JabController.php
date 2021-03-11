<?php

namespace App\Http\Controllers;

use App\Position;
use Illuminate\Http\Request;

class JabController extends Controller
{
    public function index()
    {
        $position = Position::paginate(5);
        return view('jabatan.index',compact('position'));  
    }


    public function show(Position $position)
    {
        return view('jabatan.show',compact('position'));
    }


    public function create()
    {
        return view('jabatan.create');
    }


    public function store()
    {
        $attr = request()->validate([
            'jabatan' => 'required',
        ]);
        Position::create($attr);
            
        return redirect()->to('positions');
    }


    public function edit(Position $position)
    {
        return view('jabatan.edit',compact('position'));
    }


    public function update(Position $position)
    {
        dd($position);
        // $attr = request()->validate([
        //     'jabatan' => 'required',
        // ]);

        // $position->update($attr);
        
        // return redirect()->to('positions');
    }

}
