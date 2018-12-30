<?php
session_start();
session_destroy();
print "<script>window.location='../login-representante.php';</script>";
?>