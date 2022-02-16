<?php
    class Credit
    {
        protected $number;
        protected $date;
        protected $cvv;

        public function __construct($number, $date, $cvv )
    {
        $this->number = $number;
        $this->date = $date;
        $this->cvv = $cvv;
    }

        /**
         * Get the value of number
         */ 
        public function getNumber()
        {
                return $this->number;
        }

        /**
         * Set the value of number
         *
         * @return  self
         */ 
        public function setNumber($number)
        {
                $this->number = $number;

                return $this;
        }

        /**
         * Get the value of date
         */ 
        public function getDate()
        {
                return $this->date;
        }

        /**
         * Set the value of date
         *
         * @return  self
         */ 
        public function setDate($date)
        {
                $this->date = $date;

                return $this;
        }

        /**
         * Get the value of cvv
         */ 
        public function getCvv()
        {
                return $this->cvv;
        }

        /**
         * Set the value of cvv
         *
         * @return  self
         */ 
        public function setCvv($cvv)
        {
                $this->cvv = $cvv;

                return $this;
        }
    }
?>