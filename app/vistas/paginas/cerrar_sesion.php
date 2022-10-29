<?php
    session_start();
    session_destroy();
    header("location: /SSPCERA/public/login.php");
?>