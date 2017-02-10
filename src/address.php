<?php
    class Contact
    {
        private $name;
        private $phone;
        private $address;

        function __construct($name, $phone, $address)
        {
            $this->name = $name;
            $this->phone = $phone;
            $this->address = $address;
        }

        function getName()
        {
            return $this->name;
        }

        function getPhone()
        {
            return $this->phone;
        }

        function getAddress()
        {
            return $this->Address;
        }

        function setName()
        {
            return $this->name;
        }

        function setPhone()
        {
            return $this->phone;
        }

        function setAddress()
        {
            return $this->Address;
        }

        function save()
        {
            array_push($_SESSION['address_list'], $this);
        }

        static function getAll()
        {
            return $_SESSION['address_list'];
        }

        static function deleteAll()
        {
            $_SESSION['address_list']=[];
        }


    }



?>
