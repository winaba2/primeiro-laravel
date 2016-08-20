<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\modelcon;

class cadastrarcontroller extends Controller
{
	protected $modelcon;
	public function __construct (modelcon $model) {
		$this->modelcon = $model;
	}

    public function Cadastrar (Request $request){

    	$modelcon = $request->except(['_token', 'cadastrar']);
    	$this->modelcon->postDados($modelcon);
    	
    	//return View('olamundo', array('ola'=>$this->modelcon->postDados()));
    }
}