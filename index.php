<?php 

 require_once("config.php");


//Carrega 1 usuario
//$bruno = new Usuario();
//$bruno->loadbyId(1);
 //echo $bruno;


//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);


//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("G");
//echo json_encode($search);

 //Carrega usuario usando login e senha
$usuario = new Usuario();
$usuario->login("Gabriel", "abcde");

echo $usuario;
 ?>