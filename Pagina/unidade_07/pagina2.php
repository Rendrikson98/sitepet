<?php require_once("../../conexao/conexao.php"); ?>
<?php 
    session_start(); // session_start() deve existir em todas as páginas, pois ele é que inicia as variáveis sessão
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <header>
            <div id="header_central">
                <img src="assets/logo_andes.gif">
                <img src="assets/text_bnwcoffee.gif">
            </div>
        </header>
        
        <main>  
            
            <?php
            if(isset($_SESSION["usuario"])){
                echo $_SESSION["usuario"];
                }
            else{
                echo "Efetue o login";
            }
            ?>
            <p><a href="logout.php">Logout</a></p>
            
        </main>

        <footer>
            <div id="footer_central">
                <p>ANDES &eacute; uma empresa fict&iacute;cia, usada para o curso PHP Integra&ccedil;&atilde;o com MySQL.</p>
            </div>
        </footer>
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conexao);
?>