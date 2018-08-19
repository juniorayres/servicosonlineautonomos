<?php
session_start();
include_once("conexaobanco.php");
$btnLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);
if($btnLogin){
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

	
	//echo "$usuario - $senha";
	if((!empty($usuario)) AND (!empty($senha))){
		//Gerar a senha criptografa
		
		//Pesquisar o usuário no BD
		$result_usuario = "SELECT * FROM USUARIO_CADASTRADO WHERE LOGIN_USUARIO='$usuario' LIMIT 1";
		$resultado_usuario = mysqli_query($con, $result_usuario);
		if($resultado_usuario){
			$row_usuario = mysqli_fetch_assoc($resultado_usuario);
			//if(password_verify(, $row_usuario['SENHA'])){
			if($senha === $row_usuario['SENHA']){
				$_SESSION['AREA_ATUACAO'] = $row_usuario['AREA_ATUACAO'];
				$_SESSION['NOME'] = $row_usuario['NOME'];
				$_SESSION['EMAIL'] = $row_usuario['EMAIL'];
				header("Location: administrativo.php");
			}else{
			$_SESSION['msg'] = "
  <font color='#FF0000'>&nbsp Login e senha  incorreto </font>" ;
				header("Location: http://www.servicosonlineautonomos.com.br/");
			}
		}
	}else{
		$_SESSION['msg'] = "
  <font color='#FF0000'>&nbsp Login e senha  incorreto </font>";
		header("Location:http://www.servicosonlineautonomos.com.br/");
	}
}else{
	$_SESSION['msg'] = "
  <font color='#FF0000'>&nbsp pagina não encontrada </font>";
	header("Location:cadastro.php");
}