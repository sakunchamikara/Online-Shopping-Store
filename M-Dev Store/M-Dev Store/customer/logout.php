<?php

session_start();

session_destroy();

echo "<script>window.open('../dex.php','_self')</script>";
?>