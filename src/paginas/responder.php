	<html>
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Resultado da pesquisa</title>
      <link rel="shortcut icon" href="qualidade.jpg"/>
      <link href="css/bootstrap.min.css" rel="stylesheet"media="screen">
      <div class="navbar navbar-inverse navbar-fixed-top">
         <div class="navbar-inner">
            <div class="container">
               <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <li align="center">
                  <form method="POST"action="busca.php" class="navbar-search pull-left">
                     <input type="text" name="busca" placeholder="BUSCA">
                  </form>
               </li>
               <a class="brand" href="http://www.servicosonlineautonomos.com.br/cadastro.php">CADASTRE-SE</a>
               <div class="nav-collapse collapse">
                  <ul class="nav">
                     <li class="active"><a href="administrativo.php">QUEM SOMOS</a></li>
                     <li><a href="#about"></a></li>
                     <li><a href="http://www.servicosonlineautonomos.com.br/busca.php">ORÇAMENTOS</a></li>
                     <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">PROFISSIONAIS <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           <li class="nav-header">Tecnologias</li>
                           <li class="divider"></li>
                           <li><a class="" href="http://www.servicosonlineautonomos.com.br/profissionais_eletrônica.php">tec.eletrônica</a></li>
                           <li><a href="http://www.servicosonlineautonomos.com.br/profissionais_informatica.php">tec.informatica</a></li>
                           <li><a href="http://www.servicosonlineautonomos.com.br/profissionais_redes.php">tec.redes</a></li>
                           <li><a href="http://www.servicosonlineautonomos.com.br/profissionais_programador.php">programadores T.I</a></li>
                           <li class="divider"></li>
                           <li class="nav-header">Instalações Elétricas</li>
                           <li><a href="http://www.servicosonlineautonomos.com.br/profissionais_eletricista.php">eletricista</a></li>
                           <li><a href="http://www.servicosonlineautonomos.com.br/profissionais_eletrotecnica.php">tec.eletrica</a></li>
                           <li class="nav-header">Construção Civil</li>
                           <li><a href="http://www.servicosonlineautonomos.com.br/profissionais_edificações.php">tec.edificações</a></li>
                           <li><a href="http://www.servicosonlineautonomos.com.br/profissionais_ferragens.php">tec.ferragens</a></li>
                           <li><a href="http://www.servicosonlineautonomos.com.br/profissionais_azulegista.php">tec.azulegista</a></li>
                           <li><a href="http://www.servicosonlineautonomos.com.br/profissionais_gesseiro.php">tec.gesso</a></li>
                           <li><a href="http://www.servicosonlineautonomos.com.br/profissionais_hidraulico.php">tec.hidraulico</a></li>
                        </ul>
                     </li>
                  </ul>
                  
                   <p class="brand" class="text-uppercase">
                     <?php
                        session_start();
                        if(!empty($_SESSION['EMAIL'])){
                        	
                        	 
                        
                        	echo "OLÁ!&nbsp".$_SESSION['NOME']."";
                        	echo "<br><a href='sair.php'>Sair</a>";
                            
                        
                        }else{
                        	$_SESSION['msg'] = "Área restrita";
                        	header("Location: login.php");	
                        }
                        
                        ?>   
                  <form method="POST"action="valida.php"class="navbar-form pull-right">
                  </form>
               </div>
            </div>
         </div>
      </div>
   </head>
   <body  class="hero-unit">
      <div>
         <br><br><br><br>
         <h1>SERVICOSONLINEAUTONOMOS.COM.BR</h1>
         <p>PREENCHA O FORMULARIO ABAIXO, POIS UM EMAIL SERA ENVIADO PARA O CLIENTE.</p>
         </div>
         
      
      
      
         <form action="responder.php" method="POST">
            
            <div class="row">
            
            <div class="span4">
         
               <fieldset>
                  <legend>DADOS DE RESPOSTA</legend>
                  <table cellspacing="10">
                     <tr>
                        <td>
                           <label for="nome">NOME:</label>
                        </td>
                        <td align="left">
                           <input type="text" name="nome">
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label for="telefone">TELEFONE:</label>
                        </td>
                        <td align="left">
                           <input type="text" name="telefone" size="4">
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label for="email">EMAIL: </label>
                        </td>
                        <td align="left">
                           <input type="text" name="email">
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label for="resposta">RESPOSTA ORÇAMENTO: </label>
                        </td>
                        <td align="left">
                           <input type="text" name="resposta">
                        </td>
                  </table>
               </fieldset></div>
              
            
            <div class="span4">
            
         
             <?php
            	                $nome= $_GET["nome_cliente"];
				$telefone= $_GET["telefone"];
				$email_cliente= $_GET["email_cliente"];
				$descricao= $_GET["descricao"];
              echo  " <fieldset>
                  <legend>DADOS CLIENTE</legend>
                  <table cellspacing='10'>
                     <tr>
                        <td>
                           <label for='nome_cliente'>NOME: <span>$nome</span></label>
                        </td>
                        <td align='left'>
                           <input type='hidden' name='nome_cliente' value='$nome'>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label for='telefone'> TELEFONE:<span>$telefone</span> </label>
                        </td>
                        <td align='left'>
                           <input type='hidden' name='telefone' value='$telefone'>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label for='email_cliente'> EMAIL:<span>$email_cliente</span> </label>
                        </td>
                        <td align='left'>
                           <input type='hidden' name='email_cliente' value='$email_cliente'>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label for='area_atuacao'>DESCRIÇÃO :<span>$descricao</span></label>
                        </td>
                        <td align='left'>
                           <input type='hidden' name='descricao' value='$descricao' size='100' maxlength='400' > 
                        </td>
                     </tr>
                     <tr>
                     </tr>
                  </table>
                 
               </fieldset>
               
               <input type='submit'>
               <input type='reset' value='Limpar'></>
            </div>
         </form>
         </div>"
       ?>
       
       <?php
 
         
           $nomeprof =$_POST ['nome'];
           
           $telefoneprof=$_POST['telefone'];
           $emailprof=$_POST['email_cliente'];
           
           $resposta =$_POST['resposta'];
           
           
           
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
  $Mailer->FromName =$nomeprof;
  
  //Assunto da mensagem
  $Mailer->Subject = 'PEDIDO DE ORÇAMENTO';
  
  //Corpo da Mensagem
  $Mailer->Body ='OLÁ! SEGUE RESPOSTA:'.$resposta;
  
  //Corpo da mensagem em texto
  $Mailer->AltBody = 'conteudo do E-mail em texto';
  
  //Destinatario 
  $Mailer->AddAddress($emailprof);
  
  if($Mailer->Send()){
    echo "E-mail enviado com sucesso";
  }else{
    echo "Erro no envio do e-mail: " . $Mailer->ErrorInfo;
  }
  
  ?>
        
      
       
       
      <script src="js/jquery.js"></script>
      <!--  <script src="js/bootstrap-transition.js"></script>
         <script src="js/bootstrap-alert.js"></script>
         <script src="js/bootstrap-modal.js"></script>
         <script src="js/bootstrap-dropdown.js"></script>
         <script src="js/bootstrap-scrollspy.js"></script>
         <script src="js/bootstrap-tab.js"></script>
         <script src="js/bootstrap-tooltip.js"></script>
         <script src="js/bootstrap-popover.js"></script>
         <script src="js/bootstrap-button.js"></script>
         <script src="js/bootstrap-collapse.js"></script>
         <script src="js/bootstrap-carousel.js"></script>
         <script src="js/bootstrap-typeahead.js"></script> -->
      <script src="http://code.jquery.com/jquery-latest.js"></script>
      <script src="http://code.jquery.com/jquery-latest.js"></script>
      <script src="js/bootstrap.min.js"></script>
      <script src="js/servicosonline.js"
   </body>
</html>