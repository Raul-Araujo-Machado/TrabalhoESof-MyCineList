<!DOCTYPE html>
<html lang="en">
    <head>
        <title>MyCineList</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!--link bootrap e jquery-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/estilo.css"/><!--link css-->

    </head>
    <body>
        <!--script do menu-->
        <?php
            include_once("barraNavegacao.php"); 
        ?>


<div class="container"><br><br>
  <div class="coluna col10">
    <div class="container">
    <div class="omb_login">

    <div class="row omb_row-sm-offset-3 omb_loginOr">
      <div class="col-xs-12 col-sm-6">
        <hr class="omb_hrOr">
        <span class="omb_spanOr">ENTRAR</span>
      </div>
    </div>

    <div class="row omb_row-sm-offset-3">
      <div class="col-xs-12 col-sm-6">  
          <form class="omb_loginForm" action="" autocomplete="off" method="POST" id="meuformlogin">
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-user"></i></span>
            <input type="text" class="form-control" name="email" placeholder="email address" required="">
          </div>
          <span class="help-block"></span>
                    
          <div class="input-group">
            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
            <input  type="password" class="form-control" name="senha" placeholder="Password" required="">
          </div>
            <span class="help-block" id="mensagemDiv" ></span>
          <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
        </form>  
      </div>
      </div>
      
  </div>
</div>
</div>         
</div>

         <!--script rodapé-->
        <?php
            include_once("rodape.php");
        ?>
    </body>
</html>