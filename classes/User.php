<?php
class User
{
    protected $name;
    protected $surname;
    protected $mail;
    protected $address;
    protected $credit;

    public function __construct($name, $surname, $mail, $address, $credit )
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->mail = $mail;
        $this->address = $address;
        $this->credit = $credit;
    }
    

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of surname
     */ 
    public function getSurname()
    {
        return $this->surname;
    }

    /**
     * Set the value of surname
     *
     * @return  self
     */ 
    public function setSurname($surname)
    {
        $this->surname = $surname;

        return $this;
    }

    /**
     * Get the value of mail
     */ 
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * Set the value of mail
     *
     * @return  self
     */ 
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get the value of address
     */ 
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set the value of address
     *
     * @return  self
     */ 
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get the value of credit
     */ 
    public function getCredit()
    {
        return $this->credit;
    }

    /**
     * Set the value of credit
     *
     * @return  self
     */ 
    public function setCredit($credit)
    {
        $this->credit = $credit;

        return $this;
    }
}