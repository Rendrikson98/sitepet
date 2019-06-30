<?php 
    require_once("../conexao/conexao.php");
?>
<?php 
session_start();

    $plam = "SELECT * FROM planejamento";
    $plam_query = mysqli_query($conexao, $plam);
    if(!$plam_query){
        die("Falha na consulta ao banco para planejamento");
    }

    $regimento = "SELECT * FROM regimento";
    $regimento_query = mysqli_query($conexao, $regimento);
    if(!$regimento_query){
        die("Falha na consulta ao banco de Regimento");
    }

    $editais = "SELECT * FROM editais";
    $editais_query = mysqli_query($conexao, $editais);
    if(!$editais_query){
        die("falha na consulta ao banco de editais");
    }
?>
<html>
    <head>
        <title>PET Conexões de Saberes Penedo</title>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      
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
            h2, h4{text-align: center}
            .pdf{margin-top: 10px}
            
             <?php
                include("_css/estilo.css");
            ?>
        </style>
    </head>
    <body>
    <?php
        require_once("incluir/menu.php");        
    ?>
    <h2>Planejamento</h2>
    <br>
    <div class="container">
        <div class="row">
            
    <?php 
        while($linha = mysqli_fetch_assoc($plam_query)){
    ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                
                    <a href="<?php echo $linha["endereco"]?>"><img class="pdf" src="<?php echo $linha["imagem"] ?>"></a>
                    <h4><?php echo utf8_encode($linha["nome"])?></h4>
                </div>
            </div>
    <?php
        }
    ?> 
        </div>
    </div>
    <br>
    <h2>Regimento</h2>
    <br>
    <div class="container">
        <div class="row">
    <?php 
        while($linha = mysqli_fetch_assoc($regimento_query)){     
    ?>
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <a href="<?php echo $linha["endereco"]?>"><img class="pdf" src="<?php echo $linha["imagem"] ?>" ></a>
                <h4><?php echo utf8_encode($linha["nome"])?></h4>
            </div>    
        </div>
    <?php 
        } 
    ?>
        </div>    
    </div>
    <br>
    <h2>Editais</h2>
    <br>
    <div class="container">
        <div class="row">
        <?php 
            while($linha = mysqli_fetch_assoc($editais_query)){    
        ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a href="<?php echo $linha["endereco"] ?>"><img class="pdf" src="<?php echo $linha["imagem"] ?>"></a>
                    <h4><?php echo utf8_encode($linha["nome"])?></h4>
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
    mysqli_close($conexao);
?>