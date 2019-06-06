<?php

require_once('config.php');

//carrega um usuário passando o id
//$root = new Usuario();
//$root->loadById(1);
//echo $root;

//Carrega uma lista de usuários
//$list = Usuario::getList();
//echo json_encode($list);

//Carrega uma lista de usuarios buscando pelo login 
//$search = Usuario::search("l");
//echo json_encode($search);

//Carrega um usuário usando o login e a senha
$usuario = new Usuario();
$usuario->login("Lucas", "123554");

echo $usuario;

?>