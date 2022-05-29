<?php
session_start();
session_unset();
session_destroy();
header("Location: /FPO-fifel/admin/pages/index.php?message=Successfully Logged Out");
?>