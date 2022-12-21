<?php

    //modelo
    class Funcionario {

        //atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        //getters setters (overloading / sobrecargar)

        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }

        function __get($atributo){
           return  $this->$atributo;
        }
/*
        function setNome ($nome){
            $this->nome = $nome;
        }
        
        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }

        function setTelefone ($telefone){
            $this->telefone = $telefone;
        }

        function getNome(){
            return $this->nome;
        }

        function getNumFilhos(){
            return $this->numFilhos;
        }

        function getTelefone(){
            return $this->telefone;
        }
*/
        //metodos

            function resumirCadFunc(){
                return $this->__get('nome') . " possui " . $this->__get('numFilhos') . " filho(s)";
            }

            function modificarNumFilhos($numFilhos){
                //afetar u atributo do objeto
                $this->numFilhos = $numFilhos;
            }


     
    }

    $y = new Funcionario();
    $y->__set('numFilhos', 3);
    $y->__set('nome','José');
    $y->__set('telefone','81 99999-8888');
    echo $y->resumirCadFunc();
    //echo $y->__get('nome'). ' possui ' . $y->__get('numFilhos') .' filho(s) e seu telefone é :' . $y->__get('telefone');
    echo '<hr/>';

    $x = new Funcionario();
    $x->__set('numFilhos',0);
    $x->__set('nome','Maria');
    $x->__set('telefone','81 99999-8888');
    echo $x->resumirCadFunc();
   // echo $x->__get('nome'). ' possui ' . $x->__get('numFilhos') .' filho(s) e seu telefone é :' . $x->__get('telefone');

?>