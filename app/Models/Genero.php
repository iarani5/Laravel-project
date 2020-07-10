<?php

namespace App\Models;



class Genero extends \Eloquent
{
    protected $table = "generos";
    protected $primaryKey = "id";

	protected $fillable = ['generos', 'id_confesiones'];
	
	public function CONFESION()
    {
        return $this->hasMany(Confesion::class, 'id_confesiones', 'id');
    } 
}