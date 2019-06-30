<?php 
    require_once("../conexao/conexao.php");
?>
<?php
session_start();

    $petbio = "SELECT * FROM petianos WHERE cursoID = 1 ";
    $petianos_query = mysqli_query($conexao, $petbio);
    if(!$petianos_query){
        die("falha na consulta ao banco");
    }
    
    $petpesca = "SELECT * FROM petianos WHERE cursoID = 2 ";
    $petpesca_query = mysqli_query($conexao, $petpesca);
    if(!$petpesca_query){
        die("Falha na consulta ao banco de pescas");
    }

    $petproducao = "SELECT * FROM petianos WHERE cursoID = 3 ";
    $petproducao_query = mysqli_query($conexao, $petproducao);
    if(!$petproducao_query){
        die("Falha na consulta ao banco de Produção");
    }

    $petturismo = "SELECT * FROM petianos WHERE cursoID = 4 ";
    $petturismo_query = mysqli_query($conexao, $petturismo);
    if(!$petturismo_query){
        die("Falha na consulta ao banco de Turismo");
    }

    $petsistema = "SELECT * FROM petianos WHERE cursoId = 5 ";
    $petsistema_query = mysqli_query($conexao, $petsistema);
    if(!$petsistema_query){
        die("Falha na consulta ao banco de Sistema");
    }

    $tutor = "SELECT * FROM petianos WHERE cursoId = 6 ";
    $tutor_query = mysqli_query($conexao, $tutor);
    if(!$tutor_query){
        die("Falha na consulta ao banco do Tutor");
    }
?>
<html>
    <head>
        <title>Curso de Bootstrap</title>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
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
            h2, h4{text-align: center}
            img{width: 200px;}
            
            <?php
                include("_css/estilo.css");
            ?> 
        </style>
        
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="../jquery-3.2.1.min.js"></script>
    </head>
    <body>
        <?php 
            include_once("incluir/menu.php");
        ?>
        <h2>Petianos de Ciência Biologica</h2>
        <br>
        <div class="container">
        <div class="row">     
            <?php 
                while($linha = mysqli_fetch_assoc($petianos_query)){    
            ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
            <h4><?php echo utf8_encode($linha["nome"])?></h4>
            
                <img  class="img-circle" src="<?php echo $linha["imagem"] ?>"> 
                   </div>
            </div>  
            <?php 
                }
            ?>
        </div>
        </div>
        <h2>Petianos de Engenharia de Pesca</h2>
        <br>
        <div class="container">
            <div class="row">
                <?php 
                    while($linha = mysqli_fetch_assoc($petpesca_query)){
                ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <h4><?php echo utf8_encode($linha["nome"])?></h4>
                        <img class="img-circle" src="<?php echo $linha["imagem"] ?>">
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
        
        <h2>Petianos de Engenharia de Produção</h2>
        <br>
        <div class="container">
            <div class="row">
                <?php 
                    while($linha = mysqli_fetch_assoc($petproducao_query)){
                ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <h4><?php echo utf8_encode($linha["nome"]) ?></h4>
                        <img class="img-circle" src="<?php echo $linha["imagem"]?>" >
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
        <h2>Petianos de Turismo</h2>
        <br>
        <div class="container">
            <div class="row">
                <?php 
                    while($linha = mysqli_fetch_assoc($petturismo_query)){   
                ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <h4><?php echo utf8_encode($linha["nome"]) ?></h4>
                        <img  class="img-circle"src="<?php echo $linha["imagem"]?>">
                    </div>
                </div>
                <?php
                    }
                ?>
            </div>
        </div>
        <h2>Petianos de Sistemas de Informações</h2>
        <br>
        <div class="container">
            <div class="row">
                <?php 
                    while($linha = mysqli_fetch_assoc($petsistema_query)){
                ?>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <h4><?php echo utf8_encode($linha['nome'])?></h4>
                        <img class="img-circle" src="<?php echo $linha["imagem"]?>">
                    </div>
                </div>
                <?php 
                    }
                ?>
            </div>
        </div>
        <h2>Tutor</h2>
        <br>
        <div class="container">
            <div class="row">
                <?php 
                    while($linha = mysqli_fetch_assoc($tutor_query)){
                ?>
                <div class="col-sm-6 col-md-12">
                    <div class="thumbnail">
                        <h4><?php echo utf8_encode($linha["nome"])?></h4>
                        <img class="img-circle" src="<?php echo $linha["imagem"] ?>">
                    </div>
                </div>
                <?php 
                    }
                ?>
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
mysqli_free_result($petianos_query);
mysqli_free_result($petpesca_query);
mysqli_free_result($petproducao_query);
mysqli_free_result($petturismo_query);
mysqli_free_result($petsistema_query);
?>

<?php
    mysqli_close($conexao);
?>