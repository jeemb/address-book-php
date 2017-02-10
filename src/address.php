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

        function setName($new_name)
        {
            $this->name = (string) $new_name;
        }

        function setPhone($new_phone)
        {
            $this->phone = (string) $new_phone;
        }

        function setAddress($new_address)
        {
            $this->Address = (string) $new_address;
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
