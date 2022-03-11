<?php 
        $title = "Simple If Statements";
        include 'includes/header.php' 
    ?>    
    <h1><?php print $title ?></h1>
    <?php 
        echo "<h2> If Statements</h2>";

        $grade = 30;

        if($grade >= 50){
            echo '<h3 style="color: green">YOU HAVE PASSED</H3>';
        }
        else{
            echo '<h3 style="color: red">YOU HAVE FAILED<h3/>';
        }

        $grade = 'A';

        if($grade == 'A'){
            echo '<h2 style="color: green">YOU ARE A SUPERSTAR</h2>';
        }
        elseif($grade == 'B'){
            echo '<h2 style="color: blue">YOU DID WELL!</h2>';
        }
        else{
            echo '<h2 style="color: red">YOU HAVE FAILED...</H2>';
        }

    ?>
<?php require 'includes/footer.php' ?>