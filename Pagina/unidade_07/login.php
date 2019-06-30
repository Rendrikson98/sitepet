<?php require_once("../../conexao/conexao.php"); ?>
<?php 
//adiconar variavéis de sessão
session_start();

//CRIANDO AS CONFIGURAÇÕES DE LOGIN
    //VERIFICA SE O USUARIO OU SENHA ESTÃO CONFIGURADOS
    if(isset($_POST["usuario"])){
        $usuario = $_POST["usuario"]; //ADICIONA O VALOR DE CADA UM EM UMA VARIÁVEL
        $senha = $_POST["senha"];
        
        //verificando se as informações estão sendo inseridas na vairável
        //echo $usuario."<br>".$senha;
        
        //FAZ A BUSCA DESSE USUÁRIO E SENHA NO BANCO DE DADOS
        $login = "SELECT * FROM clientes WHERE usuario = '{$usuario}' and senha = '{$senha}' "; 
        $acesso = mysqli_query($conexao, $login);
        
        if(!$acesso){
            die("Falha na busca ao banco de dados");
        }
        
        
        $informacoes = mysqli_fetch_assoc($acesso);
        //VERIFICANDO SE O USUÁRIO E SENHA INSERIDOS ESTÃO NO BANCO DE DADOS.
        if(empty($informacoes)){ //empty(nome da variável) serve para verificar se está vazio as informações buscadas pela seleção, se estiver é pq não existe
            $mensagem = "Login sem sucesso.";
            
        }
        else{
            //a sessão desse nome recebe o valor do clienteID da conta que fez o login
            $_SESSION["user_portal"] = $informacoes["clienteID"];   
            header("location: listagem.php");
        }
    }
    
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/login.css" rel="stylesheet">
    </head>

    <body>
        <header>
            <div id="header_central">
                <img src="assets/logo_andes.gif">
                <img src="assets/text_bnwcoffee.gif">
            </div>
        </header>
        
        <main>  
            <div id="janela_login">
                <form action="login.php" method="post"> <!--usa o método post pq não que expor as informçãoes para o usuário-->
                    <h2>Tela de Login</h2>
                    <input type="text" name="usuario" placeholder="Usuário">
                    <input type="password" name="senha" placeholder="Senha">
                    <input type="submit" value="Login">
                    <?php if(isset($mensagem)){ ?>
                        <p><?php echo $mensagem?></p>
                    <?php } ?>
                    
                </form>
            </div>
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