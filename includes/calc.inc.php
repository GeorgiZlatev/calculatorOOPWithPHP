<?php
    declare(strict_types = 1);
    include "class-autoLoader.inc.php";

    $oper = $_POST['oper'];
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
  
    $cacl = new Calc ($oper, (int)$num1, (int)$num2);

    try {
        echo $cacl->calculator();
    } catch (TypeError $th) {
        echo "Error!: ". $e->getMessage();
    }
?>