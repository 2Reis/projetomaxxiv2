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
    public function edit($id)
    {
        $farmacos = Farmaco::where('id',$id)->first();
        if(!empty($farmacos))
        {
            return view('indexfarma.edit', ['farmacos'=>$farmacos]);
        }
        else
        {
            return redirect()->route('farmacos-index');
        }
    }
     public function update(Request $request, $id)
    {
        $data = [
            'nome' => $request->nome,
            'categoria' => $request->categoria,
            'fabricacao' => $request->fabricacao,
            'valor' => $request->valor,
        ];
        Farmaco::where('id',$id)->update($data);
        return redirect()->route('farmacos-index');
    }
    public function destroy($id)
    {
        Farmaco::where('id',$id)->delete();
        return redirect()->route('farmacos-index');
    }
}
