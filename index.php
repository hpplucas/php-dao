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
//$usuario = new Usuario();
//$usuario->login("Lucas", "123554");
//echo $usuario;

//Criando um novo usuárop
//$aluno = new Usuario("aluno2","@lun0II");
//$aluno->insert();
//echo $aluno;

//Alterar usuario
//$usuario = new Usuario();
//$usuario->loadById(9);
//$usuario->update("professor", "@1sdad");
//echo $usuario;

//Deletar usuario
$usuario = new Usuario();
$usuario->loadById(9);
$usuario->delete();
echo $usuario;

?>