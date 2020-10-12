<?php 

require_once("config.php");
//Carrega um usuário
//$root = new Usuario();
//$root->loadbyId(3);
//echo $root;

//Carrega uma lista de usuário.
//$lista=Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuário buscando pelo login.
//$search = Usuario::search("o");
//echo json_encode($search);

//Carrega usuario usando login e senha
//$usuario=new Usuario();
//$usuario->login("root","!@#$");
//echo $usuario;

//Criando um novo usuario
//$aluno=new Usuario("aluno","@lun0");
//$aluno->insert();
//echo $aluno;

//Alterar um usuario
//$usuario=new Usuario();
//$usuario->loadbyId(7);
//$usuario->update("professor","123456");
//echo $usuario;

$usuario=new Usuario();

$usuario->loadbyId(7);

$usuario->delete();

echo $usuario;


 ?>