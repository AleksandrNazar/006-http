<?php
session_start();

$_SESSION["count"] = isset($_SESSION["count"]) ? ++$_SESSION["count"] : 0;

if ($_SESSION["count"] %3 == 0) {
    header('Location: ./page-four.php');
}
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