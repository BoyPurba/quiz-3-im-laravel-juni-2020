<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
Use App\Models\ArtikelModel;

class ArtikelController extends Controller
{
    public function erd(){
        return view('crud.erd');
    }

    public function index(){
        $artikels = ArtikelModel::get_all();
        // dd($pertanyaans);
        return view('crud.artikel', compact('artikels'));
    }

    public function create(){
        return view('crud.form_artikel');
    }

    public function store(Request $request) {
        //dd ($request->all());
        $data = ($request->all());
        unset( $data["_token"]);
        ArtikelModel::save($data);
        return redirect('/artikel');
    }

    public function show($id) {
        $item = ArtikelModel::find_by_id($id);
        return view('crud.show', compact('item'));
    }

    public function edit($id) {
        $item = ArtikelModel::find_by_id($id);

        return view('crud.edit', compact('item'));
    }

    public function update($id, Request $request) {
        // dd($request->all());
        $item = ArtikelModel::update($id, $request->all());
        
        
        return redirect('/artikel');
    }

    public function delete($id)
    {
        ArtikelModel::delete($id);
        return redirect('/artikel');
    }
}
