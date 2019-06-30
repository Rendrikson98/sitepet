<?php 
    require_once("../conexao/conexao.php");

    session_start();
?>
<html>
    <head>
        <title>Curso de Bootstrap</title>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            .paragrafo{text-indent: 4em;text-align: justify;margin: 0 auto; margin-left: 100px;margin-right: 100px}
            img{margin: 0 auto}
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
    </head>
    <body>
        <?php include_once("incluir/menu.php")?>
        <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-12">
                <div class="thumbnail">
                <h1>Sobre o PET</h1>
                <img class="img-responsive" src="_img/pet1.png">
                <br>
                <h4 class="paragrafo">O PET é desenvolvido por grupos de estudantes, com tutoria de um docente, organizados a partir de formações em nível de graduação nas Instituições de Ensino Superior do País orientados pelo princípio da indissociabilidade entre ensino, pesquisa e extensão e da educação tutorial.</h4>
                <h4 class="paragrafo">O grupo PET, uma vez criado, mantém suas atividades por tempo indeterminado. No entanto, os seus membros possuem um tempo máximo de vínculo: ao bolsista de graduação é permitida a permanência até a conclusão da sua graduação e, ao tutor, por um período de, no máximo, seis anos, desde que obedecidas as normas do Programa.</h4>
                <br>
                <a href="http://portal.mec.gov.br/pet"><button class="btn btn-primary">Mais informações</button></a>
            </div>
                </div>
        </div>
        </div>
    <?php
        require_once("incluir/rodape.php");    
    ?>        
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
        <script src="_js/script.js"></script>
    </body>
</html>
<?php 
    mysqli_close($conexao);
?>