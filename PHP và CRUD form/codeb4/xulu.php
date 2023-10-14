<?php 
    if(isset($_GET['textUser']) && isset($_GET['textPass'])){
        $user = $_GET['textUser'];
        $pass = $_GET['textPass'];
        echo "User: ".$user;
        echo "<br>"."Pass: ".$pass;
    }
    $time = getdate();
    echo "<pre>";
    print_r($time);
    echo "</pre>";

    $hour = $time['seconds'];
    echo $hour;