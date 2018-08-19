<?php


include_once ('conexaobanco.php');






	

$login_atual=$_POST['login_atual'];
$email=$_POST['email'];
$login=$_POST['login'];
$senha=$_POST['senha'];
$telefone=$_POST['telefone'];
$result_usuario = "SELECT * FROM USUARIO_CADASTRADO WHERE LOGIN_USUARIO='$login_atual' LIMIT 1";
		$resultado_usuario = mysqli_query($con, $result_usuario);
		$row_usuario = mysqli_fetch_assoc($resultado_usuario);
		
		

if($login_atual === $row_usuario['LOGIN_USUARIO']){
	
	$update = "UPDATE USUARIO_CADASTRADO SET LOGIN_USUARIO='" . $login . "', EMAIL='" . $emailmail . "',TELEFONE='" . $telefone . "', WHERE EMAIL=".$row_usuario;
	$result_usuario= mysqli_query($con, $update);}			
	else 
{
echo "erro ao ALTERAR";}

if($update>0){
echo "erro ao ALTERAR";}








?>

