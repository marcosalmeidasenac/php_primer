    <?php 
        $title = "Simple Array and Printouts";
        include 'includes/header.php' 
    ?>

    <h1><?php print $title ?></h1>

    <?php

        $numbers = array(1,2,3,4,5,6,7,8,9,310,35123,1,34,363,3521,756,834,2314);

        echo $numbers[5];
        
        echo "<p>$numbers[9]</p>";

        $size = count($numbers);

        echo "<p>Array Numbers size is: $size</p>";

        for($count = 0; $count < $size; $count++){

            echo "<p>$numbers[$count]</p>";

        };
    ?>

    <?php 
            require 'includes/footer.php' 
    ?>
