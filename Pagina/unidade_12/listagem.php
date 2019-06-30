<?php 
    // Passo 1 - Abrir conexão 
    $host = "localhost";
    $nome = "root";
    $senha = "";
    $banco = "andes";
    $conexao = mysqli_connect($host,$nome,$senha,$banco); //abre a conexão

    // Passo 2 - Testa a conexão

    if (mysqli_connect_errno()){
        die("Conexão falhou: ".mysqli_connect_errno()); // Se tiver erro mate a conexão 
    }
?> 

<?php
    // Determinar localidade BR
    setlocale(LC_ALL, 'pt_BR');

    // Consulta ao banco de dados
    $produtos = "SELECT produtoID, nomeproduto, tempoentrega, precounitario, imagempequena ";
    $produtos .= "FROM produtos ";
    if (isset($_GET["produto"])) {
        $nome_produto   = urlencode($_GET["produto"]);
        $produtos       .= "WHERE nomeproduto LIKE '%{$nome_produto}%' "; 
    }
    $resultado = mysqli_query($conexao, $produtos);
    if(!$resultado) {
        die("Falha na consulta ao banco");   
    }
?>
<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso PHP FUNDAMENTAL</title>
        
        <!-- estilo -->
        <link href="_css/estilo.css" rel="stylesheet">
        <link href="_css/produtos.css" rel="stylesheet">
        <link href="_css/produto_pesquisa.css" rel="stylesheet">
    </head>

    <body>
        <?php include_once("_incluir/topo.php"); ?>
        
        <main>
            <div id="janela_pesquisa">
                <form action="listagem.php" method="get">
                    <input type="text"  name="produto" placeholder="Pesquisa"> 
                    <input type="image" name="pesquisa" src="assets/botao_search.png">
                </form>
            </div>
            
            <div id="listagem_produtos"> 
            <?php
                while($linha = mysqli_fetch_assoc($resultado)) {
            ?>
                <ul>
                    <li class="imagem">
                        <a href="detalhe.php?codigo=<?php echo $linha['produtoID'] ?>">
                            <img src="<?php echo $linha["imagempequena"] ?>">
                        </a>
                    </li>
                    <li><h3><?php echo utf8_encode($linha["nomeproduto"]) ?></h3></li>
                    <li>Tempo de Entrega : <?php echo $linha["tempoentrega"] ?></li>
                    <li>Pre&ccedil;o unit&aacute;rio : <?php echo number_format($linha["precounitario"],2,",",".") ?></li>
                </ul>
             <?php
                }
            ?>           
            </div>
            
        </main>

        <?php include_once("_incluir/rodape.php"); ?>  
    </body>
</html>

<?php
    // Fechar conexao
    mysqli_close($conexao);
?>