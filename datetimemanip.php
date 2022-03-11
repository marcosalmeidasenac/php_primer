    <?php 
        $title = "Simple Date and Time Manipulation";
        include 'includes/header.php' 
    ?>    
    <h1><?php print $title ?></h1>
    <?php

        date_default_timezone_set('America/Sao_Paulo');
        $datenow = getdate();

        echo "Today's Date: <br/>";
        echo $datenow['mday'] . '<br/>';
        echo $datenow['mon'] . '<br/>';
        echo $datenow['year'] . '<br/>';

        echo "Today's Date: " . $datenow['mday'] . '/' . $datenow['mon'] . '/' . $datenow['year'].'<br/>';
        echo "Today's Time: " . $datenow['hours'] . ':' . $datenow['minutes'] . ':' . $datenow['seconds'].'<br/>';

        print '<br/>';
        echo time().'<br/>';
        print '<br/>';

        print date("d/m/y G.i:s<br>",time()).'<br/>';
        print "Today is ";
        print date("j \of F Y, \a\\t g.i a", time());



    ?>
<?php require 'includes/footer.php' ?>