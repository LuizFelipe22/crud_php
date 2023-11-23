<!-- ClassUsuario.php -->
<?php
class ClassVeiculo {
    private $placa;
    private $modelo;
    private $marca;
    private $ano;
    private $cor;
	
    function getPlaca() {
        return $this->placa;
    }
    function getModelo() {
        return $this->modelo;
    }
    function getMarca() {
        return $this->marca;
    }
    function getAno() {
        return $this->ano;
    }
    function getCor() {
        return $this->cor;
    }
    function setPlaca($placa) {
        $this->placa = $placa;
    }
    function setModelo($modelo) {
        $this->modelo = $modelo;
    }
    function setMarca($marca) {
        $this->marca = $marca;
    }
    function setAno($ano) {
        $this->ano = $ano;
    }
    function setCor($cor) {
        $this->cor = $cor;
    }

       
}
