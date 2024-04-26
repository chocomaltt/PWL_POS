<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KategoriModel;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\JsonResponse;

class KategoriController extends Controller
{
    public function index()
    {
        return KategoriModel::all();
    }

    public function store(Request $request)
    {
        $kategori = KategoriModel::create($request->all());
        return response()->json($kategori, 201);
    }

    public function show(KategoriModel $kategori_id)
    {
        return KategoriModel::find($kategori_id);
    }

    public function update(Request $request, string $kategori_id)
    {
        $kategori = KategoriModel::find($kategori_id);
        $kategori->update($request->all());
        return KategoriModel::find($kategori_id);
    }

    public function destroy(KategoriModel $kategori)
    {
        $kategori->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'Data kategori terhapus',
        ]);
    }
}