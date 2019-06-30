<?php 
    require_once("../conexao/conexao.php");
?>
<?php
session_start();

    if(isset($_POST["usuario"])){
        $usuario = $_POST["usuario"];
        $senha = $_POST["senha"];
        
        $login = "SELECT * FROM login WHERE usuario = '{$usuario}' and senha = '{$senha}' ";
        $login_query = mysqli_query($conexao, $login);
        if(!$login_query){
            die("Falha na consulta ao banco de dados");
        }
        
        $informacoes = mysqli_fetch_assoc($login_query);
        if(empty($informacoes)){
            $mensagem = "Usuário ou senha incorreto";
        }
        else{
            $_SESSION["user_portal"] = $informacoes["usuarioID"];
            header("location: pagina_inicial.php");
        }
    }
?>
<html>
    <head>
        <title>Curso de Bootstrap</title>
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
        <?php
            include("_css/estilo.css");
        ?>
        </style>
        <link href="css/bootstrap.min.css" rel="stylesheet">
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
        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <style>
            .thumbnail{
                align-items: center
            }
        </style>
    </head>
    <body>
        <?php include_once("incluir/menu.php") ?>
        
        <!--LEMBRAR DE CENTRALIZAR-->
        <div class="container" style="margi{0 auto}">
            <div class="col-sm-6">
                <div class="thumbnail">
                
                <h3>Tela de Login</h3>
                <form action="login.php" method="post">
                    <div class="form-group row">
                    <label class="col-sm-2 ">Usuário</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="usuario" aria-describedby="emailHelp" placeholder="Usuário">
                    </div>
                    </div>
                    <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 ">Senha</label>
                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="senha" placeholder="Senha">
                    </div>
                    <div class="col-sm-12">
                        <input class="btn btn-secondary btn-lg active" value="entrar" type="submit">  
                    </div>
                  </div>
                    <?php if(isset($mensagem)){?>
                            <p><?php echo $mensagem ?></p>
                    <?php } ?>
                </form>
                </div>
            </div>
        </div>
        
        <script src="../jquery-3.2.1.min.js"></script>
        <script src="../js/jquery.js"></script>
        <script src="../js/bootstrap.min.js"></script>
    </body>
</html>
<?php
    mysqli_close($conexao);
?>