<?php
    if(isset($_SESSION['name'])){
        echo $_SESSION['name'],  $_SESSION['email'];
    }else{
        echo 'No session';
    }
?>
