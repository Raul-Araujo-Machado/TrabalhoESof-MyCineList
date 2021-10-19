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
        <div class="container" id="listaFilme">
            <center>
                <table id="tabelaFilme" class="table">
                <thead>
                <tr>
                <th>IMAGEM</th>
                <th>Titulo</th>
                <th>Produtora</th>
                <th>Duração </th>
                <th>Sinopse</th>
                
                </tr>
                </thead>
                </table>
            </center>
            <div id="mensagemDiv"></div>
        </div><br><br>


         <!--script rodapé-->
        <?php
            include_once("rodape.php");
        ?>
    </body>
</html>