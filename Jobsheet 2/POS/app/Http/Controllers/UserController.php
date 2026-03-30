<?php

namespace App\Http\Controllers;

use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        // Hitung jumlah user dengan level_id 2
        $user = UserModel::where('level_id', 2)->count();
        
        // Hapus atau comment fungsi dd() agar view dapat dirender
        // dd($user); 
        
        return view('user', ['data' => $user]);
    }
    
}