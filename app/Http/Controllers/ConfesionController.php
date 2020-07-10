<?php

namespace App\Http\Controllers;

use App\User;
use App\Models\Usuario;
use App\Models\Genero;
use App\Models\Confesion;
use Carbon\Carbon;
use Input;
use Validator;

class ConfesionController extends Controller
{
    public function index()
    {
			$confesiones = Confesion::with(['USUARIO'],['GENERO'])->get();
			return view('confesiones/index', [
				'confesiones' => $confesiones
			]); 

    }

    public function nuevoForm()
    {
		$generos = Genero::all()->pluck('genero', 'id');

        return view('confesiones/nuevo', compact(
			'generos'
        ));
    }
	
    public function mias()
    {
		$confesiones = Confesion::with(['USUARIO'],['GENERO'])->get();

        return view('confesiones/mias', [
            'confesiones' => $confesiones
        ]);
    }

    public function nuevo()
    {
        $input = Input::all();
        $input["id_usuario"] = filter_var($this->currentUser->id, FILTER_SANITIZE_NUMBER_INT);

        $validator = Validator::make($input, Confesion::$rules);

        if($validator->fails()) {
            return redirect()
                ->route('confesiones.nuevoForm')
                ->withInput()
                ->withErrors($validator);
        }
		
		Confesion::create($input);
		return redirect()->route('confesiones.index');
    }

    public function editarForm($id)
    {
        $confesion = Confesion::findOrFail($id);
		$generos = Genero::all()->pluck('genero', 'id');
        return view('confesiones/editar', compact(
            'confesion',
            'generos'
        ));
    }

    public function editar($id)
    {
        $input = Input::all();
		var_dump($input);
        $validator = Validator::make($input, Confesion::$rulesedit);

        if($validator->fails()) {
            return redirect()
                    ->route('confesiones.editarForm', [$id])
                    ->withInput()
                    ->withErrors($validator);
        }

        $confesion = Confesion::findOrFail($id);
        $confesion->update($input);

        return redirect()
                ->route('confesiones.mias');
    }

    public function eliminar($id)
    {
        Confesion::destroy($id);
        return redirect()->route('confesiones.mias');
    }
}