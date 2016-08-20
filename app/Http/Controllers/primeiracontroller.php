<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\modelcon;

class primeiracontroller extends Controller
{
	protected $modelcon;
	public function __construct (modelcon $model) {
		$this->modelcon = $model;
	}

    public function OlaMundo (){
    	
    	return View('olamundo', array('ola'=>$this->modelcon->getDados()));
    }
    /*
    public function Cadastrar (){
    	
    	return View('olamundo', array('ola'=>$this->modelcon->postDados()));
    } 
    */   
}
