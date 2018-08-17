<!------------------------------------------------------------------------------------- 
    Author: itshally
    File Name: index.php
    Description: This file works as a simple calculator when it starts running. It
                calculates the digits that are typed-in the text fields and displays
                the result.
--------------------------------------------------------------------------------------->
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Basic PHP Calculator</title>
        <meta charset="utf-8">
        <meta name="author" content="itshally">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- CSS Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
        
        <!-- JS Bootstrap -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
        
        <!-- Custom CSS -->
        <link rel="stylesheet" type="text/css" href="css/main.css">
    </head>
    
    <body>
        
        <div class="container-fluid d-flex justify-content-center">
            <form action="index.php" method="get">
                <div class="row">
                    <div class="col-3">
                        <!-- this first form-group is for the first number -->
                        <div class="form-group">
                            <label>First Number: </label>
                            <input type="number" name="num1" class="form-control" placeholder="Enter your first digit...">
                        </div>
                        <!-- this second form-group is for the second number -->
                        <div class="form-group">
                            <label>Second Number: </label>
                            <input type="number" name="num2" class="form-control" placeholder="Enter your second digit...">
                        </div><br>
                         <!-- this dropdown is for choosing an operator -->
                        <select class="form-control" name="operator">
                            <option selected>Choose operator</option>
                            <option name="operator" value="+">+</option>
                            <option name="operator" value="-">-</option>
                            <option name="operator" value="*">*</option>
                            <option name="operator" value="/">÷</option>
                        </select>
                    </div>
                    
                    <div class="col">
                        <!-- this part will display the result -->
                        <div class="container display-result">
                            <h1>Display Result:</h1><br>
                            <p>
                                <?php
                                    include('side-script/calculate.php');
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
                <button type="submit" name="calculate" class="btn btn-lg">Calculate</button>
                <button type="reset" class="btn btn-lg"><a href="index.php">Clear</a></button>
            </form>
         </div> 
    </body>
</html>