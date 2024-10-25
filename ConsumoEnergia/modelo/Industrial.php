<?php

require_once('IConsumidorEnergia.php');

Class Industrial implements IConsumidorEnergia{

    private $consumoIndustrial;

    
    public function getValorFatura(){

        if($this->consumoIndustrial <= 500){
            $valorIndustrial = $this->consumoIndustrial * 1.8;
            return $valorIndustrial;
        }
        elseif($this->consumoIndustrial > 500){
            $excesso = $this->consumoIndustrial - 500;
            $valorIndustrial = (500 * 1.8) + ($excesso * 2.30) ;
            return $valorIndustrial;
        }

    }



    /**
     * Get the value of consumoIndustrial
     */
    public function getConsumoIndustrial()
    {
        return $this->consumoIndustrial;
    }

    /**
     * Set the value of consumoIndustrial
     */
    public function setConsumoIndustrial($consumoIndustrial): self
    {
        $this->consumoIndustrial = $consumoIndustrial;

        return $this;
    }
}