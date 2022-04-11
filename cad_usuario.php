<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Controle de Patrimônio</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap theme -->
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="theme.css" rel="stylesheet">


  </head>

  <body role="document">
    <?php
      include_once("menu_admin.php");
      echo "</br>";
     ?>
    <div class="container">
      <div class="page-header">
        <h1>Cadastrar Usuário</h1>
      </div>
      <div class="row">
      <div class="col-md-12">
        <form class="form-horizontal" method="post" action="processa/proc_cad_usuario.php">
          <div class="form-group">
            <label  class="col-sm-2 control-label">Nome</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" name="nome" placeholder="Nome Completo">
            </div>
          </div>

          <div class="form-group">
            <label  class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
            <input type="email" name="email" id="inputEmail" class="form-control" placeholder="E-mail" required autofocus>
            </div>
          </div>

          <div class="form-group">
            <label name="" class="col-sm-2 control-label">Nível acesso</label>
            <div class="col-sm-10">
              <input type="" class="form-control" name="id_cargo" placeholder="1 ADM, 2 Funcionário">
            </div>
          </div>

          <div class="form-group">
            <label name="" class="col-sm-2 control-label">Senha</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" name="senha" placeholder="senha">
            </div>
          </div>


          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <button type="submit" class="btn btn-default">Cadastrar</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="assets/js/docs.min.js"></script>

  </body>
</html>
