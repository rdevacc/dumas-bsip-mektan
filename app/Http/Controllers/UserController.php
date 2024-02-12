<?php

namespace App\Http\Controllers;

use App\Models\JenisPengaduan;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {

        $dataUsers = User::with(['jenisPengaduan', 'role'])->get();

        return view('admin.users.index', [
            'dataUsers' => $dataUsers,
        ]);
    }

    public function create()
    {

        $roles = Role::get(['id', 'nama']);
        $jenisPengaduan = JenisPengaduan::get(['id', 'nama']);

        return view('admin.users.create', [
            'roles' => $roles,
            'jenisPengaduan' =>  $jenisPengaduan,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama' => 'required|max:50',
            'email' => 'required',
            'password' => 'required|same:confirmed_password',
            'confirmed_password' => 'required|same:password',
            'role_id' => 'required',
            'jenisPengaduan_id' => 'required',
        ]);


        User::create($validatedData);

        return redirect()->route('user-index')->with('success', 'New PJ has been added!');
    }
}
