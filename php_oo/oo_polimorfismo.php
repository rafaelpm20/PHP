<?php

    class Veiculo{
        public $placa = null;
        public $cor = null;

        function acelerar(){
            echo 'Acelerar';
        }

        function freiar(){
            echo 'Freiar';
        }

        function trocarMarcha(){
            echo 'Desengatar a embreagem com o pé e engatar marcha com a mão';
        }

    }

    class Carro extends Veiculo{
       public $teto_solar = true;

       function __construct($placa, $cor){
        $this->placa = $placa;
        $this->cor = $cor;
    }

    function abrirTertoSolar(){
        echo 'Abrir teto solar';
    }

    function alterarPosicaoVolante(){
        echo 'Alterar posição volante';
    }
    }

    

    class Moto extends Veiculo{
        public $contraPesoGuidao = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar(){
            echo 'Empinar';
        }

        function trocarMarcha(){
            echo 'Desengatar a embreagem com a mão e engatar marcha com o pé';
        }
    }

     class Caminhao extends Veiculo {}

    
    $carro = new Carro('ABC1234', 'Branco');
    $moto = new Moto('DEF1234', 'Preta');
    $caminhao = new Caminhao();
    $carro->trocarMarcha();
    echo '<br/>';
    $moto->trocarMarcha();
    echo '<br/>';
    $caminhao->trocarMarcha();
  