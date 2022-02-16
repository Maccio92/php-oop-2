<?php

require_once __DIR__ . "/User.php";
class Subscription extends User
{
    protected $sale = 0;
    protected $level;

    public function __construct($level, $name, $surname, $mail, $address, $credit)
    {
        parent:: __construct($name, $surname, $mail, $address, $credit);
        $this->setLevel($level) ;
    }
    /**
     * Get the value of sale
     */ 
    public function getSale()
    {
        return $this->sale;
    }

    /**
     * Set the value of sale
     *
     * @return  self
     */ 
    public function setSale($sale)
    {
        $this->sale = $sale;

        return $this;
    }
    /**
     * Get the value of sale
     */ 
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set the value of sale
     *
     * @return  self
     */ 
    public function setLevel($level)
    {
        if($level == 1)
        {
            $this->sale = 20;
            $this->level = $level;
        } else if ($level == 2)
        {
            $this->sale = 30;
            $this->level = $level;
        } else if ($level == 3)
        {
            $this->sale = 40;
            $this->level = $level;
        }

        return $this;
    }

    
}