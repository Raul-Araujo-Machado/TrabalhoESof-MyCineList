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

        <div class="container">
            <div class="coluna col15">
                <form class="form-horizontal" id="meuform" method="post" name="form" enctype="multipart/form-data" action="insereFilme.php"><br><br>
                    <fieldset>
                        <div class="panel panel-primary">
                            <div class="panel-heading" id="alinhamentoCentro">Cadastro de Filme</div>
                                <div class="panel-body">
                                    <!-- Conteudo formulario-->
                                    <div class="form-group">
                                        <div>
                                            <center> 
                                            <img id="imgPrev" class="addimagem"  src="../img/ico.png"><br><br>
                                            <input  name="imagem" id="imagem"  type="file" class="btn btn-primary" onchange = "previewImagem()" />
                                            </center><br>  
                                        </div> 
                                    </div>
                                    <!-- titulo-->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="titulo">Título <h11>*</h11></label>  
                                        <div class="col-md-9">
                                            <input id="titulo" name="titulo" placeholder="" class="form-control input-md" required="" type="text">
                                        </div>
                                    </div>
                                    <!-- produtora e duração-->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="produtora">Produtora <h11>*</h11></label>  
                                        <div class="col-md-4">
                                            <input id="produtora" name="produtora" placeholder="" class="form-control input-md" required="" type="text">
                                        </div>
                                        <label class="col-md-1 control-label" for="duracao">Duração </label>  
                                        <div class="col-md-4">
                                            <input id="duracao" name="duracao" placeholder="Minutos" class="form-control input-md" required="" type="number">
                                        </div>
                                    </div>
                                    <!-- si-->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="Nome">Sinopse <h11>*</h11></label>  
                                        <div class="col-md-9">
                                            <input id="nome" name="nome" placeholder="" class="form-control input-md" required="" type="text">
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

    <script>
        function previewImagem() {
        var imagem = document.getElementById('imagem').files[0];
        var preview = document.getElementById('imgPrev');
        var reader = new FileReader();
            
        reader.onloadend = function () {
            preview.src = reader.result;
        }
            
        if(imagem){
            reader.readAsDataURL(imagem);
        }else{
            preview.src = "img/ico.png";
        }
        }
    </script>
</html>