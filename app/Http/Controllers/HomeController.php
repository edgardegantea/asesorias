<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Institute;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $institute = Institute::all();
        $user = Auth::user();
        $role = $user->roles->implode('name', ',');

        switch ($role) {
            case 'student':
                $saludo = "Bienvenido estudiante";
                return view('student')->with('institute', $institute)->with('saludo', $saludo);
                break;

            case 'teacher':
                $saludo = "Bienvenido maestro";
                return view('teacher')->with('institute', $institute)->with('saludo', $saludo);
                break;

            case 'admin':
                $saludo = "Bienvenido admin";
                return view('admin')->with('institute', $institute)->with('saludo', $saludo);
                break;

            case 'root':
                $saludo = "Bienvenido super admin";
                return view('root')->with('institute', $institute)->with('saludo', $saludo);
                break;

        }

        return view('home');
    }

    public function configuration() {
        $numberUsers = User::all()->count();
        $numberRoles = Role::all()->count();
        $numberPermissions = Permission::all()->count();
        return view('admin.configuration')
            ->with('numberUsers', $numberUsers)
            ->with('numberRoles', $numberRoles)
            ->with('numberPermissions', $numberPermissions);
    }

}
