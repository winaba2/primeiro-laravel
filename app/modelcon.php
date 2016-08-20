<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelcon extends Model
{
    protected $table = 'cep';

    public function getDados () {
    	return self::select()->get()->toArray();
    }

	public function postDados ($dados) {
		
    	return self::insert($dados);
		
    }

}
