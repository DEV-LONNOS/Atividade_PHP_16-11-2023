<?php
namespace App\model;

class Pessoa {
    // Propriedades da Pessoa
    public $nome;
    public $idade;
    public $endereco;


    public function __construct($nome, $idade, $endereco) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->endereco = $endereco;
    }

    // Método para exibir informações da Pessoa
    public function exibirInformacoes() {
        echo "Nome: {$this->nome}, Idade: {$this->idade}, Endereço: {$this->endereco}<br>";
    }
}