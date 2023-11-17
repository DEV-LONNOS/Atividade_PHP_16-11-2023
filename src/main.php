<?php

    include_once __DIR__ . "/../vendor/autoload.php";

    use App\model\Pessoa;

    $p1 = new Pessoa("Luis Fellipe", 20, "Rua dos Escoteiros");

    $p2 = new Pessoa("Gabriela Montiel", 19, "Rua dos Argentinos");

    echo "<h1>Daqui pra baixo é meu arquivo main.php<h1>";

    echo"<br>";
    echo $p1->nome;
    echo "<br>";
    echo $p1->idade;
    echo "<br>";
    echo $p1->endereco;
    echo "<br>";
    echo $p2->nome;
    echo "<br>";
    echo $p2->idade;
    echo "<br>";
    echo $p2->endereco;
    echo "<br>";