<html lang="pt-br">
   <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>servicosonlineautonomos.com.br</title>
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
                     <li class="active"><a href="http://www.servicosonlineautonomos.com.br">QUEM SOMOS</a></li>
                     <li><a href="#about"></a></li>
                     <li><a href="http://www.servicosonlineautonomos.com.br/busca.php">ORÇAMENTOS</a></li>
                     <li class="dropdown">
                        <a href="busca.php" class="dropdown-toggle" data-toggle="dropdown">PROFISSIONAIS <b class="caret"></b></a>
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
                           <li><a href="http://www.servicosonlineautonomos.com.br/profissionais_elétrica.php">tec.elétrica</a></li>
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
                        	header("Location: index.php");	
                        }
                        
                        ?>   
                  </p>
                  <form method="POST"action="solicitacao.php"class="navbar-form pull-right">
                     <input  name="solicitacao" class="span4" placeholder="digite nome do cliente" type="text">
                     <button type="submit"  class="btn">SOLICITAÇÕES</button>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </head>
   <body>
      <div class="hero-unit">
         <br><br>
         <br>
         <h1>SERVICOSONLINEAUTONOMOS.COM.BR</h1>
         <p>SOMOS OS MELHORES,BUSCAMOAS A EXELÊNCIA, PARA GARANTIR AOS NOSSOS CLIENTES SERVIÇOS DE QUALIDADE EFICIÊNCIA BOM PREÇO E TRANSPÂRENCIA.</p>
         <br> 
         <div class="row">
            <div class="span4 offset1">
               <h2>QUALIDADE</h2>
               <p>Profissionais de estrema facilidade de comunicação,tranparentes,com vasta experiência e certificados em seus orgaõs reguladores.</p>
               <p><img src="qualidade.jpg"width="190" height="190" class="img-circle"></p>
            </div>
            <div class="span4 offset1">
               <h2>PREENCHER PARA</h2>
               <form method="POST"action="" class="">
               <fieldset>
                  <legend>ALTERAR DADOS</legend>
                  <table cellspacing="10">
                     
                     
                     <tr>
                        <td>
                           <label for="login">Login atual: </label>
                        </td>
                        <td align="left">
                           <input type="text" name="login_atual">
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label for="email"> Novo E-mail: </label>
                        </td>
                        <td align="left">
                           <input type="text" name="email">
                        </td>
                     </tr>
                      <tr>
                        <td>
                           <label for="login">Novo Login : </label>
                        </td>
                        <td align="left">
                           <input type="text" name="login">
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label for="pass">Nova Senha: </label>
                        </td>
                        <td align="left">
                           <input type="password" name="senha">
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label for="telefone">Novo telefone: </label>
                        </td>
                        <td align="left">
                           <input type="telefone" name="telefone">
                        </td>
                     </tr>
                  </table>
               </fieldset>
                <br />
               <input type="submit">
               <input type="reset" value="Limpar">
               </form>
               
            </div>
             </form>
            <div class="span4 offset1">
               <h2>OBRIGATÓRIO ANEXAR SEU CREA OU CNPJ,EM PDF,PARA CONTINUAR CADASTRADO </h2>
               <p>
                  <?php
                     include_once("conexaobanco.php");
                     
                     
                     $msg=false;
                     if(isset($_FILES['imagem'])){
                     $extencao=strtolower(substr($_FILES['imagem']['name'],-4));
                     $nome=$_POST['nome'];
                     $novo_nome=$extencao;
                     $diretorio="certificados/";
                     move_uploaded_file($_FILES['imagem']['tmp_name'],$diretorio.$novo_nome);
                     
                     $sql = "INSERT INTO arquivo (codigo,nome,arquivo,data) VALUES(null,'$nome','$novo_nome',now())";
                     if($con->query($sql))
                     $msg="arquivo enviado";
                     else $msg="falha";
                     }
                     ?>
                  <?php if($msg!=false) echo"<p>$msg</p>";?>
               <form method="POST"  action="administrativo.php" enctype="multipart/form-data">
                  <input  name="nome" class="span4" placeholder="digite seu nome " type="text">
                  <input type="file" required name="imagem" >
                  <input type="submit" name="salvar">
               </form>
               </p>
            </div>
         </div>
      </div>
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
