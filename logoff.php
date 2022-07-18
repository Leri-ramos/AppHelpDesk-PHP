<?php

    session_start();
    


   

/*

    //remover indices do array de sessão 
    // unset() - sendo array, pode ser ultilizado para remoção de indices

    unset($_SESSION['x']); // remove o indice apenas se existir 

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';



    //destruir a variável de sessão
    //session_destroy() - remove todos os indices da global session

    session_destroy(); // sera destruida, somente numa proxima requisição 
    // forçar um redirecionamento 

    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';

    */

    session_destroy(); //destroi todas as sessões logadas
    header('Location: index.php'); // redirecionamento

    





?>