<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(){
        // $data = [
        //     'nama' => 'Pelanggan Pertama',
        // ];
        // UserModel::where('username', 'customer-1')->update($data);
        // // $data = [
        // //     'username' => 'customer-1',
        // //     'nama' => 'Pelanggan',
        // //     'password' => Hash::make('12345'),
        // //     'level_id' => 4
        // // ];
        // // UserModel::insert($data);

        // $user = UserModel::all();
        // return view('user', ['data'=>$user]);

        // PRAKTIKUM 1 : $FILLABLE
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_dua',
        //     'nama' => 'Manager 2',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);
            
        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_tiga',
        //     'nama' => 'Manager 3',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);

        // PRAKTIKUM 2.1 : Retrieving Single Models
        
        // $user = UserModel::all();
        // $user = UserModel::find(4);
        // $user = UserModel::where('level_id', 6)->first();
        // $user = UserModel::firstWhere('level_id', 1);
        // $user = UserModel::findOr(20, ['username', 'nama'], function(){
        //     abort(404);
        // });
        // $user = UserModel::findOrFail(1);
        // $user = UserModel::where('username', 'manager9')->firstOrFail();

        $user = UserModel::where('level_id', 2)->count();
        // dd($user);
        return view('user', ['data'=>$user]);
    }      
}
