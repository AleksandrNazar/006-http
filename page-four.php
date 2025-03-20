<?php
session_start();

if (isset($_SESSION["count"])) {
    echo 'Третья страница бала открыта: ' . $_SESSION["count"] . ' раз.';
}
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница 4</title>
</head>
<body>
<h1>Страница 4</h1>
</body>
</html>