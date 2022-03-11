<?php 
        $title = "Simple String Manipulation";
        include 'includes/header.php' 
    ?>    
    <h1><?php print $title ?></h1>
    <?php
        $phrase1 = "student who came late";
        $phrase2 = "in class, stand with Rock";
        $name = "marcos almeida";
        echo $phrase1.", named Tiffany, ".$phrase2;

        ECHO '<HR/>';

        echo "<p>Uppercase first letter: " . ucfirst($name) . "</p>";
        echo "<p>Uppercase first letter of each word: " . ucwords($name) . "</p>";
        echo 'Upper case: ' . strtoupper($name).'<BR/>';
        echo 'Lower case: ' . strtolower('THIS WAS ALL UPPER CASE').'<BR/>';

        ECHO '<HR/>';

        ECHO 'Repeat String: '.str_repeat(ucwords($name).", ", 5).'<br/>';

        ECHO 'Get a Substring: ' . substr($name, 5, 6).'<br/>';

        echo 'Get position of string: ' . strpos($name, 's').'<br/>';

        echo 'Find Character "r": ' . strchr($name, 'r').'<br/>';
        echo 'Find Character "a": ' . strchr($name, 'a').'<br/>';
        echo 'Find Character "m": ' . strchr($name, 'm').'<br/>';
        echo 'Find Character "l": ' . strchr($name, 'l').'<br/>';

        echo 'Find Lenght of String: ' . strlen($name).'<br/>';

        echo 'Without Trim: '."A"." B C D "."E".'<BR/>';
        ECHO 'Trim spaces on both sides: '."A".trim(" B C D ")."E".'<BR/>';
        ECHO 'Trim spaces to the left: '."A".ltrim(" B C D ")."E".'<BR/>';
        ECHO 'Trim spaces to the right: '."A".rtrim(" B C D ")."E".'<BR/>';

        echo ' Replace string with another: '.str_replace("stand", "sit", $phrase2).'<br/>';
    ?>
    
    <?php require 'includes/footer.php' ?>