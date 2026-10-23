<?php

namespace App\Http\Controllers;

use App\Models\Aktivitas; 
use Illuminate\Http\Request;

class AktivitasController extends Controller
{
    
    function index() {
        $data = Aktivitas::oldest()->get();
        return view('aktivitas.index', compact('data'));
    }

    public function create(){
        return view('aktivitas.create');
    }

    public function store(Request $request){
        $request->validate([
            'nama_aktivitas' => 'required|string|max:250',
            'deskripsi' => 'required|string|max:250',
            'tanggal' => 'required|date',
            'status' => 'required|boolean',
        ]);
        Aktivitas::create($request->all());
        return redirect('/aktivitas')->with('success', 'Aktivitas berhasil ditambahkan');
    }

    public function update(Request $request, $id){
        
        $request->validate([
            'nama_aktivitas' => 'required|string|max:250',
            'deskripsi' => 'required|string|max:250',
            'tanggal' => 'required|date',
            'status' => 'required|boolean',
        ]);
        $aktivitas = aktivitas::find($id);
        $aktivitas->update($request->all());
        return redirect()->route('aktivitas')->with('success', 'Aktivitas berhasil diupdate');
    }

    public function destroy($id)
    {
        $aktivitas = aktivitas::find($id);
        $aktivitas->delete();
        return redirect()->route('aktivitas')->with('success', 'Aktivitas berhasil dihapus');
    }
    public function edit($id)
    {
        $aktivitas = Aktivitas::find($id);
        return view('aktivitas.edit', compact('aktivitas')); 
    }

    public function show(Aktivitas $aktivitas){
        return view('aktivitas.show', compact('aktivitas'));
    }
}
