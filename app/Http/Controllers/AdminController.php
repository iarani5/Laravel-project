<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

use App\User;
use App\Models\Genero;
use App\Models\Confesion;
use App\Models\Usuario;

class AdminController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$usuarios = Usuario::all();
		return view('usuarios/index', [
			'usuarios' => $usuarios
		]); 
			
    }
}