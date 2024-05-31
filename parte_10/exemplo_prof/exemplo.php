<?php

    // O que é uma Variável de Tipo Array? Uma forma de salvar varias informações de uma vez só!
    // O que é um Laço de Repetição? Renderiza uma parte de código automaticamnte de forma repetida. 
    // Obs: Poup excesso de repetição ao digitar um grupo de códigos!

    // 1ª Forma de trabalhar com Variável de Tipo Array!
    $carros = array("Chevrolet", "VolksWagen", "BMW", "Ford", "FIAT");

    echo '<strong>Renderização de um Array com o comando print_r.</strong><br>';
    print_r($carros);

    echo '<br><pre>';
    print_r($carros);
    echo '</pre><br>';

    // Variável $i representa a posição onde o Laço de Repetição vai iniciar a leitura dos dados e renderizar os valores!
    // $i = Indice/Primeiro!

    echo '<strong>Laço de Repetição FOR renderizando os Valores e as Posição da vez!</strong><br>';
    for($i=0; $i < count($carros); $i++){
        echo 'O valor da Variável Carros é: ' . $carros[$i] . ' - Posição da vez: ' . $i . '.<br>';
    }

    echo '<hr>';

    echo '<strong>Renderização de um Array com o comando var_dump.</strong><br>';
    var_dump($carros);

    echo '<pre>';
    var_dump($carros);
    echo '<br></pre>';

    echo '<hr>';

    // 2ª Forma de trabalhar com Variável de Tipo Array!
    $motos = array();

    $motos[] = 'Honda'; // Posição 0 do Array!
    $motos[] = 'Suzuki'; // Posição 1 do Array!
    $motos[] = 'Harley Davidson'; // Posição 2 do Array!
    $motos[] = 'Indian'; // Posição 3 do Array!

    echo '<strong>Renderização de um Array com o comando print_r.</strong><br>';
    print_r($motos);

    echo '<br><pre>';
    print_r($motos);
    echo '</pre><hr>';

    echo '<strong>Renderização de um Array com o comando var_dump.</strong><br>';
    var_dump($motos);

    echo '<pre>';
    var_dump($motos);
    echo '<br></pre>';

    // Variável $i representa a posição onde o Laço de Repetição vai iniciar a leitura dos dados e renderizar os valores!
    // $i = Indice/Primeiro!

    echo '<strong>Laço de Repetição FOR renderizando os Valores e as Posição da vez!</strong><br>';
    for($i=0; $i < count($motos); $i++){
        echo 'O valor da Variável Motos é: ' . $motos[$i] . ' - Posição da vez: ' . $i . '.<br>';
    }

    echo '<hr>';