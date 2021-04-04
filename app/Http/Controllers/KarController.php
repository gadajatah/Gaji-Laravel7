<?php

namespace App\Http\Controllers;
use App\Worker;
use Illuminate\Http\Request;

class KarController extends Controller
{
    public function index()
    {
        $workers = Worker::paginate(4);
        return view('karyawan.index',compact('workers'));  
    }
}
