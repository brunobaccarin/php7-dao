<?php 

 require_once("config.php");

$bruno = new Usuario();

$bruno->loadbyId(1);

echo $bruno;

 ?>