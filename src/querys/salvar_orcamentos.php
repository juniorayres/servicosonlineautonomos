<?php


include_once ('conexaobanco.php');




$id=0;
$nomecliente= $_POST['nomecliente'];
$telefone=$_POST['telefone'];
$email_cliente=$_POST['email'];
$descricao_servico=$_POST['descricao_servico'];
$nome_profissional=$_POST['nome_profissional'];
$cnpj=$_POST['cnpj'];
$email_profissional=$_POST['email_profissional'];
$atuacao=$_POST['atuacao'];




$sql=$con->prepare("insert into SOLICITAR_ORCAMENTO values(?,?,?,?,?,?,?,?,?)"); 
$sql-> bind_param("issssssss",$id,$nomecliente,$telefone,$email_cliente, $descricao_servico, $nome_profissional,$cnpj, $email_profissional, $atuacao );



$sql->execute();

$sql->store_result();
$result=$sql->affected_rows;
 
if($result>0)


{
echo "<div><center><td>PEDIDO ENVIADO COM SUCESSO,RESPONDEREMOS EM BREVE.</td>";

}
else 
{
echo "erro ao ENVIAR";}



 






echo "<a href='http://www.servicosonlineautonomos.com.br/busca.php'>Clique aqui para realizar um novo orçamento</a><br>";
echo "<a href='http://www.servicosonlineautonomos.com.br/'>Clique aqui para voltar ao site</a><br></div>";




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
  $Mailer->FromName =$nomecliente;
  
  //Assunto da mensagem
  $Mailer->Subject = 'PEDIDO DE ORÇAMENTO';
  
  //Corpo da Mensagem
  $Mailer->Body = ' ACESSE O SITE PARA MAIS INFORMAÇÕES,VOCÊ RECEBEU UM PEDIDO DE ORÇAMENTO DE:'.$nomecliente;
  
  //Corpo da mensagem em texto
  $Mailer->AltBody = 'conteudo do E-mail em texto';
  
  //Destinatario 
  $Mailer->AddAddress($email_profissional);
  
  if($Mailer->Send()){
    echo "";
  }else{
    echo "Erro no envio do e-mail: " . $Mailer->ErrorInfo;
  }
  
?>
