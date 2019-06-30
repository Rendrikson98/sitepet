<?php 
    require_once("../conexao/conexao.php");

    session_start();
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
            h1,h2{text-align: center}
            img{width: 450px; height: 250px}
            p{text-indent: 4em;text-align: justify}

            <?php
                include("_css/estilo.css");
            ?> 
        </style>
    </head>
    <body>
    <?php
        require_once("incluir/menu.php");        
    ?>
    <div class="container">
        <h1>Ensino</h1>
        <br><br>
        <div class="thumbnail">
            <div class="row">
                <div class="col-sm-6 col-md-8">
                    <h2>PRÉ-ENEM COMUNITÁRIO</h2>
                    <br>
                    <p> 
     Esta atividade tem como objetivo proporcionar aos estudantes oriundos do médio de escolas públicas de Penedo e cidades circunvizinhas, maiores chances de ingressar nas IFES, além de permitir uma maior integração da Unidade de Ensino Penedo, como a comunidade local. O curso pré-ENEM Conexões de Saberes Penedo, foi inciado de forma intensiva em 2010. Após sete anos de atividades atingiu mais de 540 alunos, com uma taxa de aprovação em 40%. </p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="_img/Screenshot_4.png">
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="thumbnail">
            <div class="row">
                <div class="col-sm-6 col-md-8">
                    <h2>INGLÊS INSTRUMENTAL: DESENVOLVENDO A COMPETÊNCIA DE LEITURA</h2>
                    <br>
                    <p>
    Este projeto pretende dar mais qualificação para os petianos do grupo Conexões de Saberes Penedo. Em um primeiro contato com os alunos recém ingresso no meio acadêmico percebe-se que necessitam de auxílio para desenvolverem o Inglês Instrumental para leitura e compreensão de textos acadêmico. Assim, pretende-se resolver este problema, oferecendo aos petianos o conhecimento de Inglês Instrumental para que possam ser acadêmicos mais bem-sucedidos no processo ensino/aprendizagem.</p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img  src="_img/Screenshot_5.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="thumbnail">
            <div class="row">
                <div class="col-sm-6 col-md-8">
                    <h2>TROCANDO SABERES</h2>
                    <br>
                    <p>   Esta atividade promoverá a interação de toda a comunidade acadêmica da UFAL Penedo através da troca de materiais didáticos como livros e apostilas com conteúdo voltados às áreas de graduação da Unidade e da literatura brasileira e em suas especificidades, possibilitar a toda comunidade acadêmica a participar da ação educacional de forma integrativa e ética. Melhorando a troca de conhecimento entre os graduandos de períodos distintos, possibilitando a troca de materiais didáticos já utilizados.
                    </p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="_img/Screenshot_6.png">
                    </div>
                </div>
            </div>
        </div>
        <div class="thumbnail">
            <div class="row">
                <div class="col-sm-6 col-md-8">
                    <h2>UTILIZAÇÃO DE TECNOLOGIA COMO FERRAMENTA DE ENSINO EM ESCOLAS PÚBLICAS</h2>
                    <br>
                    <p>  Esse projeto pretende auxiliar, por meio de capacitação, profissionais de escolas públicas da Cidade de Penedo a utilizar essas ferramentas no dia-a-dia da prática docente, contribuindo na dinamização do ensino.
                    </p>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="thumbnail">
                        <img src="_img/Screenshot_7.png">
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
    mysqli_close($conexao);
?>