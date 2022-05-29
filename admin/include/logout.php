<?php
session_start();
session_unset();
session_destroy();
header("Location:/FPO-fifel/index.php?message=Successfully Logged Out");
?>