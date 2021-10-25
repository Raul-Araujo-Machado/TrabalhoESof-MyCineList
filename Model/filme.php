<?php
include_once('banco.php');

class Filme{
    
    private $titulo;
    private $produtora;
    private $duracao;
    private $sinopse;

    public function __construct($titulo,$produtora,$duracao,$sinopse){
        $this->setTitulo($titulo);
        $this->setProdutora($produtora);
        $this->setDuracao($duracao);
        $this->setSinopse($sinopse);
      }
    
    function insereFilme(){
        $banco= new banco();
        $string_sql = sprintf("INSERT INTO filme (titulo, produtora,duracao,sinopse) VALUES ('$this->titulo','$this->produtora','$this->duracao','$this->sinopse')");

        $r = $banco->queryInsertDados($string_sql);
        if($r == 1)
            echo '<h4 style = "color: red">Sucesso</h4>';
        else
            echo '<h4 style = "color: red">'.$r.'</h4>';
    }


    public function getTitulo(){
        return $this->titulo;
    }
    public function getProdutora(){
        return $this->produtora;
    }
    public function getDuracao(){
        return $this->duracao;
    }
    public function getSinopse(){
        return $this->sinopse;
    }
  
    public function setTitulo($t){
        $this->titulo = $t;
    }
    public function setProdutora($p){
        $this->produtora= $p;
    }
    public function setDuracao($d){
        $this->duracao=$d;
    }
    public function setSinopse($s){
        $this->sinopse=$s;
    }
}