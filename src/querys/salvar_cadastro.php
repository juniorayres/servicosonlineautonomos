<?php
include_once ('conexaobanco.php');

?>


<?php

$id=0;
$cpf= $_POST['cpf'];
$crea=$_POST['crea'];
$nome=$_POST['nome'];
$data_nascimento=$_POST['nascimento'];
$telefone=$_POST['telefone'];
$email=$_POST['email'];
$rua=$_POST['rua'];
$numero=$_POST['numero'];
$bairro=$_POST['bairro'];
$estado=$_POST['estado'];
$cidade=$_POST['cidade'];
$cep=$_POST['cep'];
$area_atuacao=$_POST['atuacao'];

$senha =$_POST['senha'];


$login_usuario=$_POST['login'];
$cnpj=$_POST['cnpj'];

$sql=$con->prepare("insert into USUARIO_CADASTRADO values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)"); 
$sql->bind_param ("issssssssssssssss",$id,$cpf,$crea,$nome,$data_nascimento,$telefone,$email,$rua,$numero, $bairro, $estado,$cidade,$cep,$area_atuacao,$senha,$login_usuario,$cnpj);


$sql->execute();
 
 
$sql->store_result();
$result=$sql->affected_rows;



if($result>0)


{
echo "</div><center><td>dados inseridos com sucesso</td>";

}
else 
{
echo   " <center><td>erro ao inserir dados</td>";}

    



 






echo "<a href='http://www.servicosonlineautonomos.com.br/cadastro.php'>Clique aqui para realizar um novo cadastro</a><br>";
echo "<a href='http://www.servicosonlineautonomos.com.br/'>Clique aqui para voltar ao site</a><br></div>";

?>


<?php
require 'PHPMailer/PHPMailerAutoload.php';


$Mailer = new PHPMailer();
	
	//Define que será usado SMTP
	$Mailer->IsSMTP();
	
	//Enviar e-mail em HTML
	$Mailer->isHTML(true);
	
	//Aceitar carasteres especiais
	$Mailer->Charset = 'UTF-8';
	
	//Configurações
	$Mailer->SMTPAuth = true;
	$Mailer->SMTPSecure = 'ssl';
	
	//nome do servidor
	$Mailer->Host = 'br684.hostgator.com.br';
	//Porta de saida de e-mail 
	$Mailer->Port = 465;
	
	//Dados do e-mail de saida - autenticação
	$Mailer->Username = 'profissionais@servicosonlineautonomos.com.br';
	$Mailer->Password = 'l18092015l';
	
	//E-mail remetente (deve ser o mesmo de quem fez a autenticação)
	$Mailer->From = 'profissionais@servicosonlineautonomos.com.br';
	
	//Nome do Remetente
	$Mailer->FromName = 'cadastro';
	
	//Assunto da mensagem
	$Mailer->Subject = 'PROFISSIONAL CADASTRADO';
	
	//Corpo da Mensagem
	$Mailer->Body ='mais um cliente cadastrado no servicosonlineautonomos' ;
	
	//Corpo da mensagem em texto
	$Mailer->AltBody ='' ;
	
	//Destinatario 
	$Mailer->AddAddress('junioralvesmedeiros@gmail.com');
	
	if($Mailer->Send()){
		echo "";
	}else{
		echo "Erro no envio do e-mail: " . $Mailer->ErrorInfo;
	}
	

?>
