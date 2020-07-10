<?php

namespace App\Models;


class Confesion extends \Eloquent
{
    protected $table = "confesiones";
    protected $primaryKey = "id_confesiones";
	
	protected $fillable = ['TITULO', 'CONFESION', 'FECHA_CREACION', 'id_usuario', 'id_genero'];
	
	    public static $rules = [
		'TITULO' => 'required|min:3|max:100',
        'CONFESION' => 'required',
        'FECHA_CREACION' => 'required|date'
    ];
	    public static $rulesedit = [
		'TITULO' => 'required|min:3|max:100',
        'CONFESION' => 'required'
    ];
	
    public function USUARIO()
    {
        return $this->belongsTo(Usuario::class, 'id_usuario', 'id');
    }
	public function GENERO()
    {
        return $this->belongsTo(Genero::class, 'id_genero', 'id');
    }


}