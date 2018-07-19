<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Arquivo base de controller

class Base extends CI_Controller {

    //Método construtor
    function __construct(){
        parent:: __construct(); 
    }




	public function index(){
		// $this->load->view('welcome_message'); Método padrão do Controller
	}
}
