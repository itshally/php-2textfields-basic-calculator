<!------------------------------------------------------------------------------------- 
    Author: itshally
    File Name: calculate.php
    Description: This file do the calculations.
--------------------------------------------------------------------------------------->
<?php
    if(isset($_GET['calculate'])){
        //declare variables
         $var1 = $_GET['num1'];
         $var2 = $_GET['num2'];
         $result = "";
        switch($_GET['operator']){
            case "+":
                $result = $var1 + $var2;
                echo "$var1 + $var2 = <br>".$result;
                break;
            case "-":
                $result = $var1 - $var2;
                echo "$var1 - $var2 = <br>".$result;
                break;
            case "*":
                $result = $var1 * $var2;
                echo "$var1 * $var2 = <br>".$result;
                break;
            case "/":
                $result = $var1 / $var2;
                echo "$var1 ÷ $var2 = <br>".$result;
                break;
            default:
                echo "Please choose an operator";
        }  
    }
?>