<?php

require_once('IConsumidorEnergia.php');

Class Residencial implements IConsumidorEnergia{

    private $consumoResidencial;

    public function getValorFatura(){
        $valorResidencial = $this->consumoResidencial * 1.05;
        return $valorResidencial;
    }

   

    /**
     * Get the value of consumoResidencial
     */
    public function getConsumoResidencial()
    {
        return $this->consumoResidencial;
    }

    /**
     * Set the value of consumoResidencial
     */
    public function setConsumoResidencial($consumoResidencial): self
    {
        $this->consumoResidencial = $consumoResidencial;

        return $this;
    }
}
   