<?php
echo "HELLO";

$var = $_POST["mapeddate"] ?? "PEPE";
$document_root = $_SERVER["DOCUMENT_ROOT"];

$fp = fopen("$document_root\coso.txt", 'a+');
fwrite($fp, $var.PHP_EOL);

echo json_encode($var);

?>