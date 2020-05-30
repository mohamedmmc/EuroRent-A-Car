<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'crud'
) or die(mysqli_erro($mysqli));

?>
