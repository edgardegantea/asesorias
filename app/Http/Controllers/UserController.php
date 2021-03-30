<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        // $users = DB::table('users')->paginate(10);
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function create()
    {
        $roles = Role::all()->pluck('name', 'id');
        return view('users.create', compact('roles'));
    }

    public function store(Request $request)
    {
        $user = new User;
        $user->name     = $request->name;
        $user->apat     = $request->apat;
        $user->amat     = $request->amat;
        $user->email    = $request->email;
        $user->password = bcrypt($request->getPassword());

        if ($user->save()) {
            $user->assignRole($request->role);
            return redirect()->to('/users');
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
