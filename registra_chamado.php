<?php
    session_start();

    // estamos trabalhando na montagem do texto
    $titulo = str_replace('#','-', $_POST['titulo']);
    $categoria = str_replace('#','-', $_POST['categoria']);
    $descricao = str_replace('#','-', $_POST['descricao']);

    $texto = $_SESSION['id'] . '#' . $titulo.'#'.$categoria.'#'.$descricao . PHP_EOL;
    //abrindo arquivo
    $arquivo = fopen('../../app_help_desk/arquivo.hd', 'a');
    //Escrevendo texto no arquivo
    fwrite($arquivo,$texto);
     //Fechando o arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php');

   

    
    //_replace substitui qualquer ocorencia de cerquilha por qualquer outro caracter 
/*
    $titulo = str_replace('#','-', $_POST['titulo']);
    $categoria = str_replace('#','-', $_POST['categoria']);
    $descricao = str_replace('#','-', $_POST['descricao']);



    $texto = $titulo.'#'.$categoria.'#'.$descricao;
    echo $texto;
    
    //http://php.net/manual/pt_BR/function.fopen.php
    //Abrindo o arquivo
    //fopen('arquivo.hd', 'a'); // função nativa para textos 
    $arquivo = fopen('arquivo.hd','a');

    //Escrevendo texto no arquivo
    fwrite($arquivo,$texto);

    //Fechando o arquivo
    fclose($arquivo);

    //echo $texto;
    header('Location: abrir_chamado.php')

    */

?>