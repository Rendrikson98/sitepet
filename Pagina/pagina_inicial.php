<?php 
    require_once("../conexao/conexao.php");
?>
<?php 
session_start();
    
    
    $imagem = "SELECT * FROM slide ORDER BY slideId ASC";
    $imagem_query = mysqli_query($conexao, $imagem);
    if(!$imagem_query){
        die("Falha na busca ao banco de dados");
    }

    $slide = "SELECT * FROM slide ORDER BY slideId ASC";
    $slide_query = mysqli_query($conexao, $slide);
    if(!$slide_query){
        die("Falha na busca ao banco");
    }
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
    </head>
    <body>
        <!--INÍCIO DO MENU-->
        
        <?php include_once("incluir/menu.php") ?>
        
        <!--FIM DO MENU-->
        <!--INÍCIO DO CARROUSEL-->
           
        <div class="container" id="inicio">
            <div class="col-sm-12 col-md-12 text-center">
                <div class="carousel slide" data-ride="carousel" id="galeria">
         
                    <ol class="carousel-indicators">
                        <?php 
                            $controle = 2;
                            $controle_num = 1;
                            while($linha = mysqli_fetch_assoc($slide_query)){
                                if($controle == 2){
                        ?>
                            <li data-target="#galeria" data-slide-to="0" class="active"></li>
                        <?php
                                $controle = 1;
                                }else{ 
                        ?>
                             <li data-target="#galeria" data-slide-to="<?php echo $controle_num;?>"></li>
                        <?php
                                $controle_num ++;
                                }
                            }
                        ?>  
                    </ol>
            
                    <div class="carousel-inner">
                     <?php 
                        $saber = 2;
                        while($linha = mysqli_fetch_assoc($imagem_query)){
                            if($saber == 2){ ?>
                        <div class="item active">
                            <img src="<?php echo $linha["imagem"] ?>" class="img-responsive">
                        </div>  
                    <?php
                            $saber = 1;
                            }else{ 
                    ?>
                        <div class="item">
                            <img src="<?php echo $linha["imagem"] ?>" class="img-responsive">
                        </div>    
                    <?php
                                 }
                        }
                     ?>
                    </div>
                </div>
                
                <a class="left carousel-control" href="#galeria" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#galeria" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
        <?php
            
        ?>
        <br>
        <!--FIM DO CARROUSEL -->
        <!--iNÍCIO DOS BLOCOS DE TEXTO-->
        <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Sobre o PET</h3>
                        <p>O Programa de Educação Tutorial é um programa do governo federal brasileiro de estímulo a atividades de pesquisa, ensino e extensão universitárias, no nível de graduação. </p>
                        <p><a href="sobre_pet.php" class="btn btn-primary" role="button">Mais Detalhes</a></p>
                    </div>
                </div>
            </div>    
            
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Atividades</h3>
                        <p>Orientados pelo princípio da indissociabilidade entre ensino, pesquisa e extensão, realizamos atividades em nível de graduação relacionadas aos cursos da Unidade Educacional de Penedo.</p>
                        <p><a href="extensao.php" class="btn btn-primary" role="button">Saiba Mais</a></p>
                    </div>
                </div>
            </div>  
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Conheça Nosso PET</h3>
                        <p>Atualmente contamos com 12 petianos dos cursos de Engenharia de Pesca, Turismo, Engenharia de Produção, Ciências Biológicas e Sistemas de Informação, além do tutor.</p>
                        
                        <p><a href="equipe.php"  class="btn btn-primary" role="button"  >Mais detalhes</a></p>
                    </div>
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
    mysqli_free_result($imagem_query);
    mysqli_free_result($slide_query);
?>
<?php
    mysqli_close($conexao);
?>