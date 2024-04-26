<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    public function index()
    {
        return UserModel::all();
    }

    public function store(Request $request)
    {
        $user = UserModel::create($request->all());
        return response()->json($user, 201);
    }

    public function show(UserModel $user)
    {
        return UserModel::find($user);
    }

    public function update(Request $request, string $user_id)
    {
        $user = UserModel::find($user_id);
        $user->update($request->all());
        return UserModel::find($user_id);
    }

    public function destroy(UserModel $user)
    {
        $user->delete();
        
        return response()->json([
            'success' => true,
            'message' => 'Data user terhapus',
        ]);
    }
}