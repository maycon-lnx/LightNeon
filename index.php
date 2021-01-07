

<?php

    $IP = explode(".",$_SERVER['REMOTE_ADDR']);
        if ($IP[0]==143 && $IP[1]==137){

            include ('topo.php');
            include ('header.php');
            include ('main.php');            
        }


        if ($IP[0]!=143 && $IP[1]!=137){

            echo ("<img src='logo.png'>");
            
        }



?>


