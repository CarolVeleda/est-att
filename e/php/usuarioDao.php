<?php

include_once('usuario.php');

class usuarioDAO{

	private function conexao(){
		$scon="port=5432 dbname=estagio user=postgres password=postgres";
		return pg_connect($scon);
    }
    
    public function inserir($u){
        $conn = $this->conexao();
        
        $verifica_email="SELECT * FROM Usuario WHERE email = $1";
        $res1 = pg_query_params($conn, $verifica_email,array($email));
        $n1 = pg_num_rows($res1);

        if ($n1==0){
            //registrar
            $sql ="INSERT INTO usuario (nomeusuario,email,senha) VALUES ($1,$2,$3) RETURNING codusuario"; 
            $vetor = array($u->get_nome(), $u->get_email(), $u->get_senha());
            $res = pg_query_params($conn, $sql, $vetor);
            $linha = pg_fetch_assoc($res);
            $u->set_codUsuario(intval($linha['codusuario']));
        }

        if ($n1==1){
            //fazer
            //já está registrado
        }

		pg_close($conn);
    }
    
    public function deletar($cod){
		$conn = $this->conexao();
		$sql = "DELETE FROM usuario WHERE codusuario = $1";
		$res = pg_query_params($conn, $sql, array($cod));
		pg_close($conn);
    }
    
    public function alterar($u){
		$conn = $this->conexao();
		$sql="UPDATE usuario SET nomeusuario=$1,email=$2,senha=$3 WHERE codusuario = $4 ";
        $v = array($u->get_nome(), $u->get_email(), $u->get_senha(), $u->get_codUsuario());
        
        $res = pg_query_params($conn, $sql,$v);
		
    }
    
    public function login($email,$senha){
        $conn = $this->conexao();
        //$sql="SELECT * FROM Usuario WHERE email = $1 and senha= $2";
        
        $verifica_email="SELECT * FROM Usuario WHERE email = $1";
        $verifica_senha="SELECT * FROM Usuario WHERE senha = $1";

        $res1 = pg_query_params($conn, $verifica_email,array($email));
        $res2 = pg_query_params($conn, $verifica_senha,array($senha));
        $n1 = pg_num_rows($res1);
        $n2 = pg_num_rows($res2);

        if ($n1==0){
            //email errado, não está registrado
            $u=0;
        }
        if ($n1==1 && $n2==0){
            //senha errada
            $u=1;
        }
        if ($n1==1 && $n2==1){
            //login correto
            $linha = pg_fetch_assoc($res1);
            $u= new Usuario($linha['nomeusuario'], $linha['email'],$linha['senha']);
            $u->set_codUsuario(intval($linha['codusuario']));
            $v=array();
            array_push($v,$u);
        }

        return $u;

    }





}


//$udao = New usuarioDAO();
//$u = $udao->login('caroll@gmail.com',MD5('123'));
//print_r($u);

?>