<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResnponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DataTables\KategoriDataTable;
use App\Models\KategoriModel;

class KategoriController extends Controller
{
    public function index(KategoriDataTable $dataTable)
    {
        return $dataTable->render('kategori.index');
    }

    public function create(){
        return view('kategori.create');
    }

    public function store(Request $request): RedirectResponse{
        $validated = $request->validate([
            'kategori_kode'=> 'bail|required',
            'kategori_nama'=> 'required'
        ]);
        return redirect('/kategori');
    }

    public function edit($id) {
        $data = KategoriModel::find($id);
        return view('kategori.edit', ['data' => $data]);
    }

    public function update(Request $request, $id) {
        $data = KategoriModel::find($id);
        $data->kategori_kode = $request->kategori_kode;
        $data->kategori_nama = $request->kategori_nama;
        $data->save();
        return redirect('/kategori');
    }

    public function destroy(string $id) {
        KategoriModel::destroy($id);
        return redirect('/kategori');
    }
}
