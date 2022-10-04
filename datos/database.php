<?php
$db = new PDO('mysql:host=localhost; dbname=FINANCIERA', 'root', 'dvlzee15');
if(!$db){
    echo "Error al conectar la base de datos";
    exit;
}
?>