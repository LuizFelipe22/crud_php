<!--  ClassVeiculoDAO.php  -->
<?php
require_once 'Conexao.php';
class ClassVeiculoDAO
{
    public function cadastrar($novoVeiculo)
    {
        try {
            $pdo = Conexao::getInstance(); // Instanciando o objeto a partir da classe conexão -solicitar um “getInstance()” na nossa classe Conexao
            $sql = "INSERT INTO veiculo(placa, modelo, marca, ano, cor) values (?,?,?,?,?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $novoVeiculo->getPlaca());
            $stmt->bindValue(2, $novoVeiculo->getModelo());
            $stmt->bindValue(3, $novoVeiculo->getMarca());
            $stmt->bindValue(4, $novoVeiculo->getAno());
            $stmt->bindValue(5, $novoVeiculo->getCor());
            $stmt->execute();
            //return true;
            header('Location:listar.php');
?>
            
<?php
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    } //fechamento do método cadastrar


    public function listar()
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "SELECT placa, modelo, marca, ano, cor FROM veiculo";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll();
        } catch (PDOException $erro) {
            return $erro->getMessage();
        }
    } //fechamento do método listar

    // Excluir Veiculo pela placa
    public function excluir($novoVeiculo)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "DELETE FROM veiculo WHERE placa=:placa";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':placa', $novoVeiculo->getPlaca());
            $stmt->execute();
            return TRUE;
        } catch (PDOException $erro) {
            return $erro->getMessage();
        }
    } //fechamento do método excluir

    // Atualizar
    public function alterar($novoVeiculo)
    {
        try {
            $pdo = Conexao::getInstance();
            $sql = "UPDATE veiculo SET  placa=:placa, modelo=:modelo, marca=:marca, ano=:ano, cor=:cor WHERE placa=:placa";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(':placa', $novoVeiculo->getPlaca());
            $stmt->bindValue(':modelo', $novoVeiculo->getModelo());
            $stmt->bindValue(':marca', $novoVeiculo->getMarca());
            $stmt->bindValue(':ano', $novoVeiculo->getAno());
            $stmt->bindValue(':cor', $novoVeiculo->getCor());
            $stmt->execute();
            return TRUE;
        } catch (PDOException $erro) {
            echo $erro->getMessage();
        }
    } //fechamento da função alterar
}//fechamento da classe
