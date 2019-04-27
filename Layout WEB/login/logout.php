<?php 

    session_start();

    session_destroy();

    header("location: logind.php");
    
?>