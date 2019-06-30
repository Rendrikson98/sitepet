<?php
    function gerarCodigoUnico() {
        $alfabeto   = "23456789ABCDEFJGHJKMNPQRS"; //Criando uma sequência de caracteres para sorteio
        $tamanho    = 30; // Tamanho do caracter que será gerado 
        $letra      = "";
        $resultado  = "";

        for ($i = 1; $i < $tamanho ; $i++ ) { // fazendo sortear a quantidade de caractere da variável tamanho
            $letra      = substr( $alfabeto, rand(0,23), 1); //substr pega uma ou mais caracteres de uma palavra no caso da variável $alfabeto, de vai sortear uma das letras da variável, e so quer uma letra); 
            $resultado  .= $letra; //Pegou a letra sorteada e colocu na variável resultado
        }
        
        //echo $resultado."<br>";

        date_default_timezone_set('America/Recife'); //Pegando a data daquela região
        $agora = getdate(); //pegando a data
        
        //Pegando as informações da data
        $codigo_data = $agora['year'] . "_" . $agora['yday']; //['yday'] pega o dia do ano
        $codigo_data .= $agora['hours'] . $agora['minutes'] . $agora['seconds']; //Para diminuir o risco pega a hora, minuto e segundos
        return "foto_" . $codigo_data . "_" . $resultado; //O nome da foto será a junção da palavra foto_, do nome aleatório e a data e horário daquele dia
    }

    function getExtensao($nome) {
        return strrchr($nome,"."); //a funçaão strrchr($a variavel com um nome, "caractere marcador" a função só pegará o nome que vier depois desse caractere) ISSO SERVE PARA PEGAR O TIPO DO ARQUIVO
    }

    function publicarImagem($imagem) {
        $arquivo_temporario = $imagem['tmp_name'];
        $nome_original      = $imagem['name'];
        $nome_novo          = gerarCodigoUnico() . getExtensao($nome_original); //vai pegar o codigo gerado e vai concatenar com o nome da extenção (ex: .png, .jpeg, etc)
        $nome_completo      = "images/product_images/" . $nome_novo;
        
        if(move_uploaded_file($arquivo_temporario, $nome_completo)) {
            return array("Imagem publicada com sucesso",$nome_completo);   
        } else {
            return array(retornarErro($imagem['error']),"");            
        }        
    }

    function retornarErro($numero_erro) {
        $array_erro = array(
            UPLOAD_ERR_OK =>            "Sem erro.",
            UPLOAD_ERR_INI_SIZE =>      "O arquivo enviado excede o limite definido na diretiva upload_max_filesize do php.ini.",
            UPLOAD_ERR_FORM_SIZE =>     "O arquivo excede o limite máximo de 600Kb.",
            UPLOAD_ERR_PARTIAL =>       "O upload do arquivo foi feito parcialmente.",
            UPLOAD_ERR_NO_FILE =>       "Nenhum arquivo foi enviado.",
            UPLOAD_ERR_NO_TMP_DIR =>    "Pasta temporária ausente.",
            UPLOAD_ERR_CANT_WRITE =>    "Falha em escrever o arquivo em disco.",
            UPLOAD_ERR_EXTENSION =>     "Uma extensão do PHP interrompeu o upload do arquivo."
        ); 
        
        return $array_erro[$numero_erro];
    }
?>