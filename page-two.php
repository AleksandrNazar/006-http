<?php
header('Content-Type: text/plain');
header('Content-Type: application/txt');
header('Content-Disposition: attachment; filename="text-file.txt"');
echo $_GET["text"];