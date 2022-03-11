    <?php 
        $title = "Home";
        include 'includes/header.php' 
    ?>
    <!-- Basic HTML -->
    <h1><?php print $title ?></h1>
    <br/>
    <?php 
        // Printing to HTML using echo
        echo 'Hello PHP!';
        echo '<br/>';
        echo 'Second Line';
        echo '<br/>';
        echo '<br/>';
    ?>

    <?php 
        // declare variable
        $name = 'Marcos Almeida';
        $age = 31;
        // echo variable
        echo $name;
        echo '<h1>My Name Is: '.$name.'</h1>';
        echo '<h1>My Age Is: '.$age.'</h1>';
        
    ?>
<?php require 'includes/footer.php' ?>
