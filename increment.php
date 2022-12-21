<?php
  session_start();
  if (isset($_SESSION['number'])) {
    $_SESSION['number']++;
  } else {
    $_SESSION['number'] = 1;
  }
  header('Location: click.html');
?>
