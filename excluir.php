<!--  excluir.php -->
<?php require_once 'ClassVeiculo.php'; ?>
<?php require_once 'ClassVeiculoDAO.php'; ?>

<?php

   $classVeiculoDAO = new ClassVeiculoDAO();
   $array = $classVeiculoDAO->listar();

	if (isset($_GET['placa'])) {
		    $placa = $_GET['placa'];
			
	        $novoVeiculo = new ClassVeiculo();
			$novoVeiculo->setPlaca($placa);
		          
			$classVeiculoDAO = new ClassVeiculoDAO();
			
            $array = $classVeiculoDAO->excluir($novoVeiculo);
            if ($array==TRUE) {
                 header('Location:listar.php');
            }else {
              echo "Erro";
			}
    }
?>
 


