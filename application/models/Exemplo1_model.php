<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Arquivo base de controller

class Exemplo1_model extends CI_Model {
    
    function __construct(){
        parent:: __construct(); 
    }
    public function salvar(){
        //está errado printar uma mensagem chamando pelo metodo
        echo 'executado o método salvar do model';
	}

}