<?php 

class Fibonacci {

 private $valorSerie;

    public function __construct() {
       $this->valorserie =0;}

       public function getValorserie()
       {
          return $this->valorserie;
       
       }
         public function setValorserie($valor){
             $this->valorserie = $valor;
       } 

  public function fibonacciHacerMientras() {
        $cont=0;
        $p = 0;
        $f=1;
    
        do {
            echo $p. " ";
            $a = $p + $f; 
            $p = $f;
            $f = $a;
            $cont++;
        
        } while ($cont < $this->getValorserie());
    } 
    public function fibonacciMientras() {
        $cont=0;
        $p = 0;
        $f=1;
        
        while ($cont < $this->getValorserie()) {
            echo $p. " ";
            $a = $p + $f; 
            $p = $f;
            $f = $a;
            $cont++;
        
        } 
    } 

public function fibonacciPara(){
$a=0;
$b=1;

for ($i=1; $i<=$this->getValorserie(); $i++) {

    echo $a . " ";
    $c = $a + $b;
    $a = $b;
    $b = $c; 
}

}


}

?>