<?php
    //Start Session
    session_start();
    //Destroy Session
    session_destroy();
    //Jump to index
    header("Location: index.html");
    exit();
?>