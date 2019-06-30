<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="../_css/estilo.css" rel="stylesheet">
        <script src="../../jquery-3.2.1.min.js"></script>
    </head>
    <body>
        <!-- Digite abaixo seu codigo -->
       
      
            
        <nav class="navbar navbar-default">
            <section class="container">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#movel" aria-expanded="false">
                    <span class="sr-only">Toggle  navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div>
                    <a href="pagina_inicial.php" class="navbar-brand">
                        <img src="_img/WhatsApp%20Image%202017-11-16%20at%2011.38.47.jpeg">
                    </a>
                </div>
                </div>
                
                <div class="collapse navbar-collapse" id="movel">
                <ul class="nav navbar-nav">
                    <li><a href="pagina_inicial.php">Início</a></li>
                    <li><a href="sobre_pet.php">Sobre o PET</a></li>
                    <li><a href="equipe.php">Equipe</a></li>
                    <li role="presentation" class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="#">Atividades<span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="ensino.php">Ensino</a></li>
                            <li><a href="pesquisa.php">Pesquisa</a></li>
                            <li><a href="extensao.php">Extensão</a></li>
                            <li><a href="outras_atividades.php">Outras atividades</a></li>
                        </ul>
                    </li>
                    <li class="dropdown"><a href="arquivo.php">Arquivos</a></li>
                    <a href="login.php"><button class="btn btn-primary">Login</button></a>
                    <?php 
                        if(isset($_SESSION["user_portal"])){ 
                    ?>
                        <a href="sair.php"><button class="btn btn-info">Sair</button></a>
                    <?php
                        }
                    ?>
                </ul>
                </div>
            </section>
        </nav>
                
    
       
       
        <script src="../../js/jquery.js"></script>
        <script src="../../js/bootstrap.min.js"></script>
        <script src="../_js/script.js"></script>
    </body>
</html>