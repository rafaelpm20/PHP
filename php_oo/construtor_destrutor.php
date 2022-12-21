<?php

    class Pessoa {
        public $nome = null;
        public $idade = null;
        public $telefone = null;
        public $numFilhos = null;

        function __construct($nome, $idade, $telefone, $numFilhos){
            echo 'Objeto iniciado';
            $this->nome = $nome;
            $this->idade = $idade;
            $this->telefone = $telefone;
            $this->numFilhos = $numFilhos;
        }

        function __destruct(){
            echo 'Objeto removido';
        }

        function __get($atributo){
            return $this->$atributo;
        }

        function correr(){
            return $this->__get('nome') . '  esta correndo';
        }
    }

    $pessoa = new Pessoa('Jorge', '26', '81 99999-8888', '3');
    echo '<br/> Nome: ' . $pessoa->__get('nome');
    echo '<br/> idade: ' . $pessoa->__get('idade');
    echo '<br/> telefone: ' . $pessoa->__get('telefone');
    echo '<br/> Filhos: ' . $pessoa->__get('numFilhos');
    echo '<br/> Nome: ' . $pessoa->correr();
    echo '<br/>'


?>