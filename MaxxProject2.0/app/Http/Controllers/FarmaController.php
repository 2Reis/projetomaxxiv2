<?php

namespace App\Http\Controllers;

use App\Models\Farmaco;
use Illuminate\Http\Request;

class FarmaController extends Controller
{
    public function index()
    {
        $farmacos = Farmaco::all();
        return view('indexfarma.index', ['farmacos'=>$farmacos]);
    }
    public function create(){
        return view('indexfarma.create');
    }
    public function store(Request $request)
    {
        Farmaco::create($request->all());
        return redirect()->route('farmacos-index');
    }
}
