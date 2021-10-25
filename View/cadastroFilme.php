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
        <script rsc="text/javascript">
            $(function() {
                $("#meuform").submit(function(event){
                    event.preventDefault();

                    var dados_form = $(this).serialize();
                    $.ajax({
                        type:"post",
                        url:"../Controller/insereFilme.php",
                        data:dados_form,
                        success: function(responseData){
                            $("#mensagemDiv").html(""+responseData);
                            document.getElementById('titulo').value = "";
                            document.getElementById('duracao').value = "";
                            document.getElementById('produtora').value = "";
                            document.getElementById('sinopse').value = "";
                            
                            $().ready(function() {
                                setTimeout(function () {
                                $('#mensagemDiv').hide();
                                }, 2500); 
                            });
                        },
                        error: function(request,status,error){
                            $("#mensagemDiv").html(""+responseText);
                            $().ready(function() {
                                setTimeout(function () {
                                $('#mensagemDiv').hide();
                                }, 2500);
                            });
                        }
                    });
                });
            });
        </script>




    </head>
    <body>
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
                                    <div class="form-group">
                                        <div>
                                            <center> 
                                            <img id="imgPrev" class="addimagem" style="border-radius:20px" src='http://anakordelos.com/wp-content/uploads/2016/05/top-05-filmes-favoritos-da-vida.jpg'><br><br>
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
                                    <!-- sinopse-->
                                    <div class="form-group">
                                        <label class="col-md-2 control-label" for="sinopse">Sinopse <h11>*</h11></label>  
                                        <div class="col-md-9">
                                            <input id="sinopse" name="sinopse" placeholder="" class="form-control input-md" required="" type="text">
                                        </div>
                                    </div>
                                    
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

         <!-- rodapé-->
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