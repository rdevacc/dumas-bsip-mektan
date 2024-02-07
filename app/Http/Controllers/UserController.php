<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $dataUser = User::with(['jenisPengaduan', 'role'])->get();

        return view('admin.users.index', [
            'dataUser' => $dataUser,
        ]);
    }

    public function create(){
        return view('admin.users.create');
    }
}
