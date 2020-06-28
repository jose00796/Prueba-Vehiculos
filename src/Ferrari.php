<?php

class Ferrari implements automovil
{
    public $llave;
    public $gasolina;
    
    public function Encender()
    {
        if ($this->llave == false) {
            Show("Auto Encendido");
            return $this->llave = true;
        }
    }
    
    public function Apagar()
    {
        if ($this->llave == true) {
            Show("Auto Apagado");
            return $this->llave = false;
        }
    }

    public function GetLLave()
    {
        return $this->llave;
    }
    
    public function SetGas($gas)
    {
        $this->gasolina = $gas;
    }

    public function GetGas()
    {
        return $this->gasolina;
    }

    public function Conducir($km)
    {
        if ($this->GetLLave() == true) {
            
            $this->GetGas();
            $reducir = $km/3;
        
            if ($this->GetGas() >= $km) {
                Show("Kilometros a Recorrer = $km");

                Show("Se han recorrido $km  Kilometros durante el Paseo hacia el Corazon de Migdaly");
                $this->SetGas($this->GetGas() - $reducir);

                Show("Cantidad de Gasolina Disponible {$this->GetGas()}");
            }
            
            elseif ($this->GetGas() < $km) {
                Show("Kilometros a Recorrer = $km");
                
                Show("Cantidad de Gasolina insuficiente para realizar este viaje Pelabola");

                Show("Cantidad de Gasolina Disponible {$this->GetGas()}");
            }

            if ($this->GetGas() <= 0) {
                Show("Se acabo la Gasolina Diablo");
                $this->Apagar();
            }            
        }
        else {
            throw new Exception("El Auto esta Apagado");
        }
    }
}
