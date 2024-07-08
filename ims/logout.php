<?php
 session_start();

 session_destroy();
 header("Location: http://localhost/practice_3/login.php");
?>