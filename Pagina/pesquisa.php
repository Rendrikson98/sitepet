<?php 
    require_once("../conexao/conexao.php");
?>
<?php
session_start();
?>
<html>
    <head>
        <title>PET Conexões de Saberes Penedo</title>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <style>
            <?php
                include("_css/estilo.css");
            ?>
        </style>
      
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="../jquery-3.2.1.min.js"></script>
        <link rel="apple-touch-icon" sizes="57x57" href="_img/aba/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="_img/aba/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="_img/aba/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="_img/aba/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="_img/aba/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="_img/aba/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="_img/aba/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="_img/aba/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="_img/aba/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="_img/aba/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="_img/aba/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="_img/aba/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="_img/aba/favicon-16x16.png">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#1C1C1C">
        <meta name="msapplication-TileImage" content="_img/aba/ms-icon-144x144.png">
        <meta name="theme-color" content="#1C1C1C">
          <style>
            h1,h2{text-align: center}
            img{width: 450px; height: 250px}
            p{text-indent: 4em;text-align: justify}
        </style>
    </head>
    <body>
    <?php
        require_once("incluir/menu.php");        
    ?>
    <div class="container">
        <div class="thumbnail">
        <h1>Pesquisa</h1>
        <br><br>
        <div class="row">
            <div class="col-sm-6 col-md-12">
                <h2>CONHECIMENTO POPULAR SOBRE O USO DE PLANTAS PARA FINS MEDICINAIS</h2>
                <br>
                <p>Projeto em fase de submissão ao Comitê de Ética. </p>
            </div>
        </div>
        </div>
    </div>
    <?php
        require_once("incluir/rodape.php");    
    ?>   
    <style>
        footer{position: fixed}
    </style>
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="_js/script.js"></script>
    </body>
</html>
<?php 
    mysqli_close($conexao);
?>