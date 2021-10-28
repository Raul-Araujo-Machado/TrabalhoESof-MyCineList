<?php
include_once('banco.php');


class Usuario{
    private $nome;
    private $email;
    private $senha;

    public function __construct($senha,$nome,$email){
        $this->setSenha($senha);
        $this->setNome($nome);
        $this->setEmail($email);
        
      }
    

      function insereUsuario(){
        $banco= new banco();
        $string_sql = sprintf("INSERT INTO usuario (email, nome,senha) VALUES ('$this->email','$this->nome','$this->senha')");
        
        $r = $banco->queryInsertDados($string_sql);
        if($r == 1)
            echo '<h4 style = "color: red">Sucesso</h4>';
        else
            echo '<h4 style = "color: red">'.$r.'</h4>';
    }


    public function getNome(){
        return $this->nome;
    }
    public function getEmail(){
        return $this->email;
    }
    public function getSenha(){
        return $this->senha;
    }
  
    public function setNome($n){
        $this->nome = $n;
    }
    public function setEmail($e){
        $this->email= $e;
    }
    
    public function setSenha($sa){
        $this->senha=$sa;
    }

}