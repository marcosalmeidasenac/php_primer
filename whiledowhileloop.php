<?php 
        $title = "Simple While Loop";
        include 'includes/header.php' 
    ?>    
    <h1><?php print $title ?></h1>
    <?php
        $grade = 0;
        while($grade < 10){
            echo '<p> I am less than 10!</p>';
            $grade++;
        }

        echo 'exit loop!'

    ?>

    <h1>Do-While Loop</h1>
    <?php
        $grade = 0;
        do{
            echo '<p> I am do while loop</p>';
            $grade++;

        }while($grade < 10);
        echo 'exit loop!'

    ?>
    
    <?php require 'includes/footer.php' ?>