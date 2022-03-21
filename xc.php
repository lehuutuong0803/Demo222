<?php 
    class PTBN
    {
        public $a;
        public $b;
        function __contruct($a,$b){
            $this->a = $a;
            $this->b = $b;
        }

        function __destruct(){
            
        }
        function Show(){
       echo  's'. $a;
        }
    }
    $pt = new PTBN(33,4);
    $pt -> Show();

    class PTBH extends PTBN{


    }

?>