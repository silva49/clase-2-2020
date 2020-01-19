<?php

if(isset($_POST["btncalcular"])) {

    require_once 'Fibonacci.php';

    $fibonacci = new Fibonacci();

    $valor = $_POST["txtvalor"];
     
    $fibonacci->setValorserie($valor);

    $fibonacci->fibonacciHacerMientras();

    echo "<br>";

    $fibonacci->fibonacciMientras();

    echo "<br>";

    $fibonacci->fibonacciPara();

}else {

 echo "No intenes hackearme";

}
