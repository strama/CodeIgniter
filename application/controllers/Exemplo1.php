<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Arquivo base de controller

class Exemplo1 extends CI_Controller {

    //Método construtor
    function __construct(){
        parent:: __construct();
        $this -> load -> model('Exemplo1_model','apelido_model'); 
    }

	public function index(){
        // $this->load->view('welcome_message'); Método padrão do Controller
        //enviando abaixo dados para a view (o segundo parâmetro é exatamente o envio dos dados)
        $dados['titulo'] = 'Essa é minha segunda view!'; 
        $dados['conteudo'] = 'Esse é o texto enviado por variavel';
        $this->load->view('exemplo1', $dados); //chamada para a view por estar na função index será default
        //exemplo abaixo do teste para saber se estamos chamando a função default do controller
        //echo 'executado o método index do controller';
    }
    public function login(){
        //echo 'executado o método login do controller e passado o parâmetro ';
        //echo $this -> uri -> segment(3);
        $this -> apelido_model -> salvar();
	}
}
