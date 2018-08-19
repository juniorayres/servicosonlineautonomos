<html>

   <head>
      <title> cadastro </title>
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
               <a class="brand" href="http://www.servicosonlineautonomos.com.br/cadastro.php">CADASTER-SE</a>
               <div class="nav-collapse collapse">
                  <ul class="nav">
                     <li class="active"><a href="http://www.servicosonlineautonomos.com.br"">QUEM SOMOS</a></li>
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
   <br>
   <body class="hero-unit">
      <div>
         <br><br>
         <h1>SERVICOSONLINEAUTONOMOS.COM.BR</h1>
         <p>PREENCHA O FORMULARIO ABAIXO PARA FAZER PARTE DE NOSSA EQUIPE.</p> 
      </div>
       <form action="salvar_cadastro.php" method="POST"> 
         <div   class="row">
          
            <!-- DADOS PESSOAIS-->
            <div class="span4">
             <fieldset>
            
                 
                  
                  <table cellspacing="10">
                      
                   <br> <br> <p> <legend aling>Dados Pessoais</legend></p>
                     
                     <tr>
                        <td>
                        
                         
                           <label for="nome">Nome: </label>
                        </td>
                        <br>
                        <td align="left">
                           <input type="text" name="nome">
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label for="nome">Telefone: </label>
                        </td>
                        <br>
                        <td align="left">
                           <input type="text" name="telefone">
                        </td>
                     <tr>
                        <td>
                           <label>Nascimento: </label>
                        </td>
                        <td align="left">
                           <input type="text" name="nascimento" size="9" maxlength="10" value="dd/mm/0000"> 
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label for="crea">CREA: </label>
                        </td>
                        <td align="left">
                           <input type="text" name="crea" size="9" maxlength="13"> 
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label>CPF:</label>
                        </td>
                        <td align="left">
                           <input type="text" name="cpf" size="9" maxlength="12">  
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label>CNPJ:</label>
                        </td>
                        <td align="left">
                           <input type="text" name="cnpj" size="9" maxlength="12">  
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label>AREA DE ATUAÇÃO:</label>
                        </td>
                        <td align="left">
                           <input type="text" name="atuacao" size="9" maxlength="20">  
                        </td>
                     </tr>
                  </table>
               </fieldset>
            </div>
            <br/>
            <!-- ENDEREÇO -->
            <div class="span4">
               <br>
               <fieldset>
                  <legend>Dados de Endereço</legend><br><br>
                  <table cellspacing="10">
                     <tr>
                        <td>
                           <label for="rua">Rua:</label>
                        </td>
                        <td align="left">
                           <input type="text" name="rua">
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label for="numero">Numero:</label>
                        </td>
                        <td align="left">
                           <input type="text" name="numero" size="4">
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label for="bairro">Bairro: </label>
                        </td>
                        <td align="left">
                           <input type="text" name="bairro">
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label for="estado">Estado:</label>
                        </td>
                        <td align="left">
                           <select name="estado">
                              <option value="ac">Acre</option>
                              <option value="al">Alagoas</option>
                              <option value="am">Amazonas</option>
                              <option value="ap">Amapá</option>
                              <option value="ba">Bahia</option>
                              <option value="ce">Ceará</option>
                              <option value="df">Distrito Federal</option>
                              <option value="es">Espírito Santo</option>
                              <option value="go">Goiás</option>
                              <option value="ma">Maranhão</option>
                              <option value="mt">Mato Grosso</option>
                              <option value="ms">Mato Grosso do Sul</option>
                              <option value="mg">Minas Gerais</option>
                              <option value="pa">Pará</option>
                              <option value="pb">Paraíba</option>
                              <option value="pr">Paraná</option>
                              <option value="pe">Pernambuco</option>
                              <option value="pi">Piauí</option>
                              <option value="rj">Rio de Janeiro</option>
                              <option value="rn">Rio Grande do Norte</option>
                              <option value="ro">Rondônia</option>
                              <option value="rs">Rio Grande do Sul</option>
                              <option value="rr">Roraima</option>
                              <option value="sc">Santa Catarina</option>
                              <option value="se">Sergipe</option>
                              <option value="sp">São Paulo</option>
                              <option value="to">Tocantins</option>
                           </select>
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label for="cidade">Cidade: </label>
                        </td>
                        <td align="left">
                           <input type="text" name="cidade">
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label for="cep">CEP: </label>
                        </td>
                        <td align="left">
                           <input type="text" name="cep" size="5" maxlength="9" value="00000-000"> 
                        </td>
                     </tr>
                  </table>
               </fieldset>
            </div>
            <br>
            <!-- DADOS DE LOGIN -->
            <div class="span4">
               <fieldset>
                  <legend>Dados de login</legend> <br> <br>
                  <table cellspacing="10">
                     <tr>
                        <td>
                           <label for="email">E-mail: </label>
                        </td>
                        <td align="left">
                           <input type="text" name="email">
                        </td>
                     </tr>
                     
                     <tr>
                        <td>
                           <label for="login">Login de usuário: </label>
                        </td>
                        <td align="left">
                           <input type="text" name="login">
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label for="pass">Senha: </label>
                        </td>
                        <td align="left">
                           <input type="password" name="senha">
                        </td>
                     </tr>
                     <tr>
                        <td>
                           <label for="passconfirm">Confirme a senha: </label>
                        </td>
                        <td align="left">
                           <input type="password" name="confirmasenha">
                        </td>
                     </tr>
                  </table>
               </fieldset>
               <br />
               <input type="submit">
               <input type="reset" value="Limpar">
            </div>
      </form>
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