<?php

    /*
    class Person {
        # Properties
        public $name;
        public $email;
    }


    $person1 = new Person;

    $person1->name = 'John Doe';

    echo $person1->name;

    */

    class Person
    {
            # Properties
        private $name;
        private $email;
            // public static $ageLimit = 40;
        private static $ageLimit = 40;

        public function __construct($name, $email)
        {
            $this->name = $name;
            $this->email = $email;

                // echo "Person Created\n";
            echo __class__ . " Created\n";
        }

        public function __destruct()
        {
            echo __class__ . " destroyed\n";

        }

        public function setName($name)
        {
            $this->name = $name;
        }

        public function getName()
        {
            return $this->name . "\n";
        }

        public function setEmail($email)
        {
            $this->email = $email;
        }

        public function getEmail()
        {
            return $this->email . "\n";
        }

        public static function getAgeLimit()
        {
            return self::$ageLimit;
        }


    }


    // $person1 = new Person('John Doe', 'johan@mail.com');

    // $person1->setName('John Doe');

    // echo $person1->getName();
    // echo $person1->getEmail();

    # Printing static properties
    echo Person::$ageLimit;

    # Printing static properties using static function
    echo Person::getAgeLimit();


    class Customer extends Person
    {

        private $balance;

        public function __construct($name, $email, $balance)
        {
            parent::__construct($name, $email, $balance);

            echo "A new" . __class__ . " has been created\n";
            $this->balance = $balance . "\n";
        }

        public function setBalance($balance)
        {
            $this->balance = $balance;
        }

        public function getBalance()
        {
            return $this->balance . "\n";
        }

    }

    // $customer = new Customer('John Doe', 'john@mail.com', 100);
    // echo $customer->getBalance();

?>