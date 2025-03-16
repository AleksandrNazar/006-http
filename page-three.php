<?php
  session_start();

  $_SESSION["count"] = isset($_SESSION["count"]) ? ++$_SESSION["count"] : 0;
  $openPageThreeCount = $_SESSION["count"];

  if ($openPageThreeCount %3 == 0) {
    header('Location: http://localhost:8000/page-four.php');
  }
 
  $name = 'Open-page-three-count';
  $value = $openPageThreeCount;
  setcookie($name, $value);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Страница 3</title>
</head>
<body>
  <h1>Страница 3</h1>
</body>
</html>