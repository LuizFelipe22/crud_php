<!-- alterarProcessa.php -->
<?php require_once 'ClassVeiculo.php'; ?>
<?php require_once 'ClassVeiculoDAO.php';?>
<?php
 
			$placa  = $_GET['placa']; 
			$modelo = $_GET['modelo'];
         $marca  = $_GET['marca']; 
			$ano    = $_GET['ano'];
         $cor    = $_GET['cor'];
			
			$novoVeiculo = new ClassVeiculo();
			$novoVeiculo->setPlaca($placa);
			$novoVeiculo->setModelo($modelo);
         $novoVeiculo->setMarca($marca);
         $novoVeiculo->setAno($ano);
         $novoVeiculo->setCor($cor);
			 		
            $ClassVeiculoDAO = new ClassVeiculoDAO();
            $array = $ClassVeiculoDAO->alterar($novoVeiculo);

            if($array==TRUE) {
               header('Location:listar.php');
            }else {
               echo "Erro";
			}
 ?>
	