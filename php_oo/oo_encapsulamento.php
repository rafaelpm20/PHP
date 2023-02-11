<?php

    class Pai {
        private $nome = 'Rafael';
        protected $sobrenome = 'Pena';
        public $humor = 'Feliz';

        
        public function __get($attr){
            return $this->$attr;
        }

        public function __set($attr, $value) {
            $this->$attr = $value;
        }
        
        private function executarMania(){
            echo 'Assobiar';
        }

        protected function responder(){
            echo 'Oi';
        }

        public function executarAcao(){
            $x = rand(1, 10);

            if($x >= 1 && $x <=8){
                $this->responder();
            } else {
                $this->executarMania();
            }
            
            
        }

        // public function getNome() {
        //     return $this->nome;
        // }

        // public function getSobrenome() {
        //     return $this->sobrenome;
        // }

        // public function setNome($value){

        //     if(strlen($value) >= 3){
        //         $this->nome = $value;
        //     }
        // }

        // public function setSobrenome($value){

        //     if(strlen($value) >= 3){
        //         $this->sobrenome = $value;
        //     }
        // }

    }

    class Filho extends Pai{ 
        public function __construct(){
           //exibir os métodos do objeto
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>'; 
        }
    }

        $filho = new Filho();
        echo '<pre>';
        print_r($filho);
        echo '</pre>';   
        
        $filho->executarAcao();
       
          

        

    //$pai = new Pai();
    //echo $pai->executarAcao();

    // $pai = new Pai();
    // echo $pai->getNome();
    // $pai->setNome('Jamilton');
    // echo '<br/>';
    // echo $pai->getNome();
    // echo '<br/>';
    // echo '<hr/>';


    // $pai = new Pai();
    // echo $pai->getSobrenome();
    // $pai->setSobrenome('Oliveira');
    // echo '<br/>';
    // echo $pai->getSobrenome();
   

    
?>