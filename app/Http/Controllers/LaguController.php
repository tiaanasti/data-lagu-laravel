<?php

namespace App\Http\Controllers;

use App\Models\Lagu;
use Illuminate\Http\Request;

class LaguController extends Controller
{
    public function index()
    {
        $lagu = Lagu::latest()->get();
        return view('lagu.index', compact('lagu'));
    }

    public function create()
    {
        return view('lagu.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penyanyi' => 'required'
        ]);

        Lagu::create($request->all());

        return redirect('/lagu')->with('success', 'Data berhasil ditambah');
    }

    public function show($id)
    {
        $lagu = Lagu::findOrFail($id);
        return view('lagu.show', compact('lagu'));
    }

    public function edit($id)
    {
        $lagu = Lagu::findOrFail($id);
        return view('lagu.edit', compact('lagu'));
    }

    public function update(Request $request, $id)
    {
        $lagu = Lagu::findOrFail($id);

        $lagu->update($request->all());

        return redirect('/lagu')->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        Lagu::destroy($id);

        return redirect('/lagu')->with('success', 'Data berhasil dihapus');
    }
}
