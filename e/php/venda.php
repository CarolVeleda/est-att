<?php

include_once('vendaDao.php');

class Venda{
    private $nomeItem;
    private $quantidade;
    private $peso;
    private $dataValidade;
    private $descricao;
    private $embalagem;
    private $cidade;
    private $bairro;
    private $rua;
    private $complemento;
    private $preco;

   
    public function __construct($nomeItem,$quantidade,$peso,$dataValidade,$descricao,$embalagem,$cidade,$bairro,$rua,$preco){
        $this->nomeItem = $nomeItem;
        $this->quantidade = $quantidade;
        $this->peso = $peso;
        $this->dataValidade = $dataValidade;
        $this->descricao = $descricao;
        $this->embalagem = $embalagem;
        $this->cidade = $cidade;
        $this->bairro = $bairro;
        $this->rua = $rua;
        $this->preco = $preco;       
    }

    public function get_nomeItem(){
        return $this->nomeItem;
    }

    public function get_quantidade(){
        return $this->quantidade;
    }

    public function get_peso(){
        return $this->peso;
    }

    public function get_dataValidade(){
        return $this->dataValidade;
    }

    public function get_descricao(){
        return $this->descricao;
    }

    public function get_cidade(){
        return $this->cidade;
    }

    public function get_bairro(){
        return $this->bairro;
    }

    public function get_rua(){
        return $this->rua;
    }
    
    public function get_complemento(){
        return $this->complemento;
    }

    public function get_preco(){
        return $this->preco;
    }

    public function get_cod(){
        return $this->cod;
    }

    public function get_embalagem(){
        return $this->embalagem;
    }

    public function get_codVendedor(){
        return $this->codVendedor;
    }

    public function set_NomeItem($ni){
        $this->nomeItem = $ni;
    }

    public function set_quantidade($q){
        $this->quantidade = $q;
    }

    public function set_peso($p){
        $this->peso = $p;
    }

    public function set_dataValidade($dv){
        $this->dataValidade = $dv;
    }

    public function set_descricao($d){
        $this->descricao = $d;
    }

    public function set_cidade($c){
        $this->cidade = $c;
    }

    public function set_bairro($b){
        $this->bairro = $b;
    }

    public function set_rua($r){
        $this->rua = $r;
    }

    public function set_complemento($cpl){
        $this->complemento = $cpl;
    }

    public function set_preco($p){
        $this->preco = $p;
    }

    public function set_cod(int $c){
        $this->cod = $c;
    }

    public function set_embalagem($e){
        $this->embalagem = $e;
    }

    public function set_codVendedor(int $cv){
        $this->codVendedor = $cv;
    }
   
    
}
    


//$m = new Venda("legume altamente venenoso","2 caixas", "25/07/2019","compre e de para os seus filhos comerem", "big lake", "quinta", "rua acre",22.00);
 
//$m1 = new Venda("excluir","2 cenouras", "25/07/2019","bem gostosinhas e crocantes", "Rio Grande", "quinta", "rua acre",5.00);
 

//$mdao = New vendaDAO();
//$mdao->inserir($m1);



?>