<?php

require_once('IConsumidorEnergia.php');

Class Comercial implements IConsumidorEnergia{

    private $consumoComercial;

    public function getValorFatura(){

        if($this->consumoComercial <= 100){
            $valorComercial = $this->consumoComercial * 1.45;
            return $valorComercial;
        }
        elseif($this->consumoComercial > 100){
            $excesso = $this->consumoComercial - 100;
            $valorComercial = (100 * 1.45) + ($excesso * 1.60) ;
            return $valorComercial;
        }
    }
   

    /**
     * Get the value of consumoComercial
     */
    public function getConsumoComercial()
    {
        return $this->consumoComercial;
    }

    /**
     * Set the value of consumoComercial
     */
    public function setConsumoComercial($consumoComercial): self
    {
        $this->consumoComercial = $consumoComercial;

        return $this;
    }
}