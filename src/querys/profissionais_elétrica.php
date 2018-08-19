<?php
  //Conectando ao banco de dados:
 include_once("conexaobanco.php");
 
 //Recebendo os dados a pesquisar
 
?>

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
		  
		  <li align="center"><form method="POST"action="busca.php" class="navbar-search pull-left">
			  <input type="text" name="busca" placeholder="BUSCA">
				</form></li>
			  
          <a class="brand" href="http://www.servicosonlineautonomos.com.br/cadastro.php">CADASTRE-SE</a>
          <div class="nav-collapse collapse">
            <ul class="nav">
              <li class="active"><a href="http://www.servicosonlineautonomos.com.br">QUEM SOMOS</a></li>
              <li><a href="#about"></a></li>
              <li><a href="http://www.servicosonlineautonomos.com.br/orçamento.php">ORÇAMENTOS</a></li>
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
            <form method="POST"action="valida.php"class="navbar-form pull-right">
              <input class="span2" placeholder="usuario" type="text">
              <input class="span2" placeholder="senha" type="password">
              <button type="submit" class="btn">ENTRAR</button>
            </form>
      

          </div>
        </div>
      </div>
    </div>
  
 
 
 </head>
 <body>
 
 <!--  tabela e cabeçalho de dados: -->
 <div class="span11"><br><br><br><br><br><br>
 <table class="table table-bordered">
 <tr>
 <th>AREA DE ATUAÇÃO</th>
 <th>NOME</th>
 <th>TELEFONE</th>
 <th>EMAIL</th>
 <th>CNPJ</th>
 </tr>
 </div>
 
 <!-- Preenchendo a tabela com os dados do banco: -->
 <?php
 $sql = "SELECT * FROM USUARIO_CADASTRADO WHERE AREA_ATUACAO LIKE'%tec.eletrotecnica%'";
 $resultado = mysqli_query($con,$sql) or die("Erro ao retornar dados");
 
 // Obtendo os dados por meio de um loop while
 while ($registro = mysqli_fetch_array($resultado))
 {
   $nome = $registro['NOME'];
   $cpf = $registro['CPF'];
   $email = $registro['TELEFONE'];
   $cnpj = $registro['CNPJ'];
   $atuacao = $registro['AREA_ATUACAO'];
   echo "<tr>";
    echo "<td>".$atuacao."</td>";
   echo "<td>".$nome."</td>";
   echo "<td>".$cpf."</td>";
   echo "<td>".$email."</td>";
    echo "<td>".$cnpj."</td>";
   echo "</tr>";
 }
 mysqli_close($con);
 echo "</table>";
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