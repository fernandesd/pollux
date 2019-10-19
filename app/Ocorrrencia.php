<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ocorrrencia extends Model
{

    protected $fillable = [
    	'latitude',
    	'longitude',
    	'tamanho_esperado'
    ];

    public static function rules(){
    	return [
    		'latitude' => ['required', 'numeric'],
    		'longitude' => ['required', 'numeric'],
    		'tamanho_esperado' => ['nullable'];

    	]
    }


}	
