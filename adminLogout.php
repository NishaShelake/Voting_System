<?php
@include 'config.php';
session_start();

  echo "<script> window.open('admin.php','_self') </script>";

session_destroy();
?>