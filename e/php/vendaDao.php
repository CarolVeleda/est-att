<?php

include_once('venda.php');

class vendaDAO{

	private function conexao(){
		$scon="port=5432 dbname=estagio user=postgres password=postgres";
		return pg_connect($scon);
    }
    
    public function inserir($p){
		$conn = $this->conexao();
		$sql ="INSERT INTO venda (nomeItem,quantidade,peso,dataValidade,descricao,embalagem,cidade,bairro,rua,complemento,preco,codvendedor) VALUES ($1,$2,$3,$4,$5,$6,$7,$8,$9,$10,$11,$12) RETURNING codproduto"; 
		$vetor = array($p->get_nomeItem(), $p->get_quantidade(), $p->get_peso(), $p->get_dataValidade(),$p->get_descricao(),$p->get_embalagem(),$p->get_cidade(),$p->get_bairro(),$p->get_rua(),$p->get_complemento(),intval($p->get_preco()),intval($p->get_codVendedor()));
		
		$res = pg_query_params($conn, $sql, $vetor);
		$linha = pg_fetch_assoc($res);
    $p->set_cod(intval($linha['codproduto']));
		pg_close($conn);
    }
    
    public function deletar($cod){
		$conn = $this->conexao();
		$sql = "DELETE FROM venda WHERE codProduto = $1";
		$res = pg_query_params($conn, $sql, array($cod));
		pg_close($conn);
    }
    
    public function alterar($p){
		$conn = $this->conexao();
		$sql="UPDATE venda SET nomeItem=$1,quantidade=$2,dataValidade=$3,descricao=$4,embalagem=$5,cidade=$6,bairro=$7,rua=$8,complemento=$9,preco=$10, peso=$11, codvendedor=$12 WHERE codproduto = $13 ";
        $v = array($p->get_nomeItem(), $p->get_quantidade(), $p->get_dataValidade(),$p->get_descricao(),$p->get_embalagem(),$p->get_cidade(),$p->get_bairro(),$p->get_rua(),$p->get_complemento(),$p->get_preco(),$p->get_peso(),intval($p->get_codVendedor()),$p->get_cod());
		$res = pg_query_params($conn, $sql,$v);
		
	}

//arrumar para que seja listados apenas os itens que tenham o cod do usuario
	function listar($c){
		$conn = $this->conexao();
		$sql = 'SELECT * from venda where codvendedor=$1';
		$v=array(intval($c));
		$res=pg_query_params($conn,$sql,$v);
		$lista = array();
		while ($linha = pg_fetch_assoc($res)){
			$p = new Venda($linha['nomeitem'], $linha["quantidade"], $linha["peso"], $linha["datavalidade"], $linha["descricao"], $linha["embalagem"], $linha["cidade"], $linha["bairro"], $linha["rua"], $linha["preco"]);

			$p->set_complemento($linha['complemento']);
			$p->set_cod(intval($linha['codproduto']));

			array_push($lista,$p);
		}
		pg_close($conn);
		return $lista;
}




}


//$mdao = New vendaDAO();
//$lista = $mdao->listar();
//print_r($lista);

?>