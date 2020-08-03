<?php
  if ($_GET['nav']) {
    $nav = $_GET['nav'];

    if (file_exists('guest/' . $nav . '.php')) include 'guest/' . $nav . '.php';
  } else {
    include 'guest/main.php';
  }
