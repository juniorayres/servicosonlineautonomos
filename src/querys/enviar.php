<?php
	require 'PHPMailer/PHPMailerAutoload.php';
	
	
	$nomecliente= $_POST['nomecliente'];
	
       $telefone=$_POST['telefone'];

       $email=$_POST['email'];

       $descricao_servico=$_POST['descricao_servico'];

        $nome_profissional=$_POST['nome_profissional'];

       $cnpj=$_POST['cnpj'];

       $email_profissional=$_POST['email_profissional'];

        $atuacao=$_POST['atuacao'];

	
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
	$Mailer->FromName = $nomecliente;
	
	//Assunto da mensagem
	$Mailer->Subject = 'SOLICITAÇÕA DE ORÇAMENTO';
	
	//Corpo da Mensagem
	$Mailer->Body =$telefone ;
	
	//Corpo da mensagem em texto
	$Mailer->AltBody =$nomecliente ;
	
	//Destinatario 
	$Mailer->AddAddress($email_profissional);
	
	if($Mailer->Send()){
		echo "E-mail enviado com sucesso";
	}else{
		echo "Erro no envio do e-mail: " . $Mailer->ErrorInfo;
	}
	
?>



