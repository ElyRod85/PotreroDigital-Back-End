<?php

    $user = $_POST ["user"];
    $pass = $_POST ["pass"];

    $CKuser = "admin";
    $CKpass = 1234;

    if ($user == $CKuser && $pass == $CKpass) { 
        header ("location:ingreso.html");
    } else {
        header ("location:fail.html");
    }

?>
