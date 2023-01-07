<?php
    // declare(strict_types = 1);
    // include "class-autoloader.inc.php";


?>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
    <form action="includes/calc.inc.php" method="POST">
        <p>My own Calculator</p>
        <input type="number" name="num1" placeholder="First number">
        <select name="oper" id="">
            <option value="add">Addition</option>
            <option value="sub">Subtraction</option>
            <option value="div">Division</option>
            <option value="mul">Multioplication</option>
        </select>
        <input type="number" name="num2" paceholder="Second number">
        <button type="submit" name="submit">Calculate</button>    
    </form>
    </body>
</html>