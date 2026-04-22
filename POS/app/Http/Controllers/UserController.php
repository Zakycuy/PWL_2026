<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $userCount = UserModel::where('level_id', 2)->count();
        $userData  = UserModel::where('level_id', 2)->get();

        return view('user', [
            'count' => $userCount,
            'data'  => $userData
        ]);

        // $user = UserModel::where('level_id', 2)->count();
        // return view('user', ['data' => $user]);

        // $user = UserModel::where('level_id', 2)->count();
        // dd($user);
        // return view('user', ['data' => $user]);

        // $user = UserModel::findOrFail(1);
        // return view('user', ['data' => $user]);

        // $user = UserModel::where('username', 'manager9')->firstOrFail();
        // return view('user', ['data' => $user]);

        // $data = [
        //     'level_id' => 2,
        //     'username' => 'manager_dua',
        //     'nama' => 'manager 3',
        //     'password' => Hash::make('12345')
        // ];
        // UserModel::create($data);

        // $user = UserMOdel::findOr(20, ['username', 'nama'], function () {
        //     abort(404);
        // });

        // return view('user', ['data' => $user]);
        
        // $user = UserModel::where('level_id', '>', 3)->firstOr(function () {

        // });
        
        // // coba akses model UserModel
        // $user = UserModel::firstwhere('level_id', 1);
        // return view('user', ['data' => $user]);
    }
}