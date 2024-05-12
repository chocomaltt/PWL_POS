<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BarangModel;
use Illuminate\Support\Facades\Validator;


class BarangController extends Controller
{
    public function index()
    {
        return BarangModel::all();
    }

    public function store(Request $request)
    {
        $request->validate([
            'kategori_id' => 'required',
            'barang_kode' => 'required',
            'barang_nama' => 'required',
            'harga_beli' => 'required',
            'harga_jual' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
        // $barang = BarangModel::create($request->all());
        $barang = BarangModel::create([
            'kategori_id' => $request->kategori_id,
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
            'image' => $request->image->hashName(),
        ]);
        
        if($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $request->image->hashName();
            $image->move(public_path('posts'), $imageName);
        }
        return response()->json($barang, 201);
    }

    public function show(string $barang_id)
    {
        return BarangModel::find($barang_id);
    }

    public function update(Request $request, string $barang_id)
    {
        $barang = BarangModel::find($barang_id);
        if($request->filled('image')) {
            $barang->update(['image' => $request->image->hashName()]);
            if($request->hasFile('image')){
                $image = $request->file('image');
                $imageName = $request->image->hashName();
                $image->move(public_path('posts'), $imageName);
            }
            $barang->update($request->except('image'));
        } else {
            $barang->update($request->all());
        }
        return BarangModel::find($barang_id);
    }

    public function destroy(BarangModel $barang)
    {
        $barang->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'Data barang terhapus',
        ]);
    }
}