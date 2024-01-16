<?php
session_start();
$conn = mysqli_connect('votedbaz.mysql.database.azure.com', 'dbadmin@votedbaz', 'Server@1', 'voting_system');

  echo "<script> window.open('admin.php','_self') </script>";

session_destroy();
?>