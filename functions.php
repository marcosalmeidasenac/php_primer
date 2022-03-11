<?php 
        $title = "Simple Functions";
        include 'includes/header.php' 
    ?>    
    <h1><?php print $title ?></h1>
    <?php

        function addFunction($num1, $num2){
            $sum = $num1 + $num2;

            print "The sum of $num1 and $num2 is: $sum <br/>";
        }

        addFunction(10,20);

        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;

            return $prod;
        }

        $returnValue = returnProduct(10, 200);
        
        print $returnValue;


    ?>
<?php require 'includes/footer.php' ?>