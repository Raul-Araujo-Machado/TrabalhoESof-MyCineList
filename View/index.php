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
                var dados_form = $(this).serialize();
                $.ajax({
                    type:"post",
                    url:"../Controller/listandoFilme.php",
                    data:dados_form,
                    success: function(responseData){
                        var resultado = JSON.parse(responseData);
                        var tabela = $("#tabelaFilme");
                        for(i = 0; resultado.length; i++) {
                            $novotr = $("<tr></tr>");
                            $caminhotd = $("<br><td><img  style='max-width:128px;max-height:150px;width: auto;height: auto; border-radius:20px' src='http://anakordelos.com/wp-content/uploads/2016/05/top-05-filmes-favoritos-da-vida.jpg'></td>");
                            $titulotd = $("<td style='width: 200px;'><b>" + resultado[i].titulo + "</b></td>");
                            $produtoratd = $("<td style='width: 200px;'>" + resultado[i].produtora + "</td>");
                            $duracaotd = $("<td style='width: 20px;'>" + resultado[i].duracao + "</td>");
                            $sinopsetd = $("<td>" + resultado[i].sinopse + "</td>");
                            $favoritotd = $("<td><button type='button' class='btn btn-success' onclick = 'teste("+resultado[i].codigo+")' >Favoritar </button></td>");


                           // $novotr.append($caminhotd);
                            $novotr.append($caminhotd);
                            $novotr.append($titulotd);
                            $novotr.append($produtoratd);
                            $novotr.append($duracaotd);
                            $novotr.append($sinopsetd);
                            $novotr.append($favoritotd);
                          
                            $(tabela).append($novotr);
                        } 
                        //se tiver retornado algum erro do banco de dados
                        },
                        error: function(request,status,error){
                            $("#mensagemDiv").html(""+responseText);
                        }
                    });
            });
        </script>

    </head>
    <body>
        <?php
            include_once("barraNavegacao.php"); 
        ?>
        <!--conteudo da pagina --> 
        <div class="container" id="listaFilme">
            <div class="col-xs-12 col-sm-6"><h1 style="margin:20px 5px ;">Filmes</h1></div>
            <center>
                <table id="tabelaFilme" class="table">
                    <thead>
                        <tr>
                        <th>Imagem</th>
                        <th>Título</th>
                        <th>Produtora</th>
                        <th>Duração </th>
                        <th>Sinopse</th>
                        
                        </tr>
                    </thead>
                </table>
            </center>
            <div id="mensagemDiv"></div>
        </div><br>
         <!--script rodapé-->
        <?php
            include_once("rodape.php");
        ?>
    </body>

    <script>
        function teste(c){
            var dados = c
            $.ajax({
                    type:"post",
                    url:"../Controller/addFavoritos.php",
                    data:{codigo: dados},
                    success: function(responseData){
                        $("#mensagemDiv").html(""+responseData);
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
        }
    </script>

</html>