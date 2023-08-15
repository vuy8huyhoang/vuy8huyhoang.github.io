<?php
    session_start();
        if (isset($_COOKIE['usr'])){
           
            
        setcookie('usr','usr',time() - 1,'/');
        setcookie('img','img',time() - 1,'/');
        }
    header('location:../index.php');
?>