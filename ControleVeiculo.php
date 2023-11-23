<!--  ControleUsuario.php -->
<?php
require_once 'ClassVeiculo.php'; //gets e sets
require_once 'ClassVeiculoDAO.php'; //Cadastrar usuário

	$placa  = $_POST['placa'];
	$modelo = $_POST['modelo'];
    $marca  = $_POST['marca'];
	$ano    = $_POST['ano'];
    $cor    = $_POST['cor'];

    $novoVeiculo = new ClassVeiculo();//cria um objeto $novoUsuario que instancia da ClassUsuario-get e set
    $novoVeiculo->setPlaca($placa);
	$novoVeiculo->setModelo($modelo);
    $novoVeiculo->setMarca($marca);
	$novoVeiculo->setAno($ano);
    $novoVeiculo->setCor($cor);
   
    $classVeiculoDAO = new ClassVeiculoDAO();//cria um objeto  $classUsuarioDAO
    $classVeiculoDAO->cadastrar($novoVeiculo);  	
 ?>



