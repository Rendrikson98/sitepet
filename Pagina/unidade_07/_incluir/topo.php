<header>
    <div id="header_central">
        
        <?php
        //Pegando o nome do usuário
            if(isset($_SESSION["user_portal"])){
                $user = $_SESSION["user_portal"];
                
                $saudacao = "SELECT nomecompleto FROM clientes WHERE clienteID = {$user} ";
                $saudacaoLogin = mysqli_query($conexao,$saudacao);
                
                if(!$saudacaoLogin){
                    die("Falha na busca ao banco de dados");
                }
                
                $saudacaoLogin = mysqli_fetch_assoc($saudacaoLogin);
                $nome = $saudacaoLogin["nomecompleto"];
        ?>
            <div id="header_saudacao"><h5>Bem vindo, <?php echo $nome?> - <a href="sair.php">Sair</a></h5></div>
        <?php }?>
        <a href="listagem.php"><img src="assets/logo_andes.gif"></a>
        <img src="assets/text_bnwcoffee.gif">
    </div>
</header>