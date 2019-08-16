<?php

include_once('usuarioDao.php');


class Usuario{
    private $nome;
    private $email;
    private $senha;

   
    public function __construct($nome,$email,$senha){
        $this->nome = $nome;
        $this->email = $email;
        $this->senha = $senha;       
    }

    public function get_nome(){
        return $this->nome;
    }

    public function get_email(){
        return $this->email;
    }

    public function get_senha(){
        return $this->senha;
    }

    public function get_codUsuario(){
        return $this->codUsuario;
    }

    public function set_nome($n){
        $this->nome = $n;
    }

    public function set_email($e){
        $this->email = $e;
    }

    public function set_senha($s){
        $this->senha = $s;
    }

    public function set_codUsuario($c){
        $this->codUsuario = $c;
    }

}







?>