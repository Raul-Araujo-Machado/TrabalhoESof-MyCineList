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

        <!--conteudo da pagina --> 
        <div class="container">
            <div class="coluna col15">

                <form class="form-horizontal" id="meuform" method="post" name="form" enctype="multipart/form-data" action="insereLixo.php"><br><br>
                <fieldset>
                    <div class="panel panel-primary">
                    <div class="panel-heading" id="alinhamentoCentro">Cadastro de Ususario</div>
                        <div class="panel-body">
                        <!-- Text input-->
                        
                            <!-- Prepended text-->
                            <div class="form-group">
                            <label class="col-md-2 control-label" for="prependedtext">Email<h11>*</h11></label>
                                <div class="col-md-9">
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                    <input id="prependedtext" name="email" class="form-control" placeholder="email@email.com" required="" type="text" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" >
                                </div>
                                </div>
                                                
                            </div> 
                            <!-- Search input-->
                            <div class="form-group">
                                <label class="col-md-2 control-label" for="Nome">Nome <h11>*</h11></label>  
                                <div class="col-md-9">
                                    <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label" for="Nome">Senha <h11>*</h11></label>  
                                <div class="col-md-5">
                                    <input id="nome" name="senha" placeholder="Password" class="form-control input-md" required="" type="password">
                                </div>
                            </div>

                            <!-- Button (Double) -->
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="Cadastrar"></label>
                            <div class="col-md-8">
                                <button id="Cadastrar" name="Cadastrar" class="btn btn-success" type="Submit">Cadastrar</button>
                                <button id="Cancelar" name="Cancelar" class="btn btn-danger" type="Reset">Cancelar</button>
                            </div>
                        </div>
                        
                            <div id="mensagemDiv"></div>
                        </div>
                    </div>
                </fieldset>
                </form>
            </div>
        </div><br><br>


         <!--script rodapé-->
        <?php
            include_once("rodape.php");
        ?>
    </body>
</html>