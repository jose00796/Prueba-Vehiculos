<?php

class comprador
{
    public $name;
    public $lastname;
    public $CI;
    public $money;

    public function __construct($name, $lastname, $CI)
    {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->CI = $CI;
    }

    public function SetMoney($riales)
    {
        $this->money = $riales;
    }

    public function GetMoney()
    {
        return $this->money;
    }

}
