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
                           <li><a href="profissionais_hidraulico.php">tec.hidraulico</a></li>
                        </ul>
                     </li>
                  </ul>
                  <li>
                     <?php
                        session_start();
                        ?>
                     <?php
                        if(isset($_SESSION['msg'])){
                         echo $_SESSION['msg'];
                         unset($_SESSION['msg']);
                        }
                        ?>
                     <form method="POST"action="valida.php"class="navbar-form pull-right">
                        <input class="span2" name="usuario" placeholder="usuario" type="text">
                        <input class="span2" name="senha" placeholder="senha" type="password">
                        <input type="submit" name="btnLogin"  value="ENTRAR" >
                     </form>
               </div>
            </div>
         </div>
      </div>
   </head>
   <body>
   <div class="hero-unit">	<br>
   <h1>SERVICOSONLINEAUTONOMOS.COM.BR</h1>
   <p>FORMADO POR INUMEROS PRESTADORES DE SERVIÇOS  AUTONOMOS QUE LHE ATENDEM 24hs! COM OS MELHORES PROFISSIONAIS DO MERCADO, COM SERVIÇOS DE EFICIÊNCIA  E TRANSPÂRENCIA.</p>
   <br> <div class="row">
   <div class="span4 offset1">
   <h2>QUALIDADE</h2>
   <p>Profissionais de estrema facilidade de comunicação,tranparentes,com vasta experiência e certificados em seus orgaõs reguladores.</p>
   <p><img  src="qualidade.jpg"width="190" height="190" class="img-circle"></p>
   </div>
   <div class="span4 offset1">
   <h2>AGILIDADE</h2>
   <p> alocação eficiente e produtiva do tempo e de recursos disponiveis para realizar seus serviços. </p><br>
   <p><img src="AGILIDADE.jpg"width="250" height="200" class="img-circle"></p>
   </div>
   <div class="span4 offset1">
   <h2>MELHORES PREÇOS</h2>
   <p>Tabelas de preços compativeis com o mercado proporcionando econômia e satisfação.</p>
   <p><img src="PREÇO.jpg"width="190" height="190" class="img-circle"></p>
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