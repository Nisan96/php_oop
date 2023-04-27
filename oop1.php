<?php

class Transaction
{
    private float $amount;
    private string $description;

    public function __construct(float $amount, string $description){
        $this -> amount = $amount;
        $this -> description = $description;
    }

    public function deductTax(float $rate) : Transaction                  # return type is Transaction....it reurns Transaction type Object
    {                
         $this->amount += ($this->amount * $rate)/ 100;

         return $this;
    }

    public function applyDiscount(float $rate) : Transaction              # return type is Transaction....it reurns Transaction type Object
    {
         $this->amount -= ($this->amount * $rate)/ 100;

         return $this;
    }

    public function getAmount() : float{
        return $this->amount;
    }

    public function getDescription() : string{
        return $this->description;
    }

    public function __destruct(){
        echo 'Destruct'. " " .$this->description;
        echo PHP_EOL;
    }
}