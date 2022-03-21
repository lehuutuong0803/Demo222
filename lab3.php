<?php
    class BN 
    {
        public $a;
         function __construct($a){
            $this->a = $a;
            
        }

         
         function show(){
            echo  $this->a.'as';
        }
    }
    
    $n = new BN(1);
    $n ->show();
?>