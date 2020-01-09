<?php
    class Person {
        public $firstName;
        public $secondName;

        public function __construct($firstName, $secondName) {
            $this->firstName = $firstName;
            $this->secondName = $secondName;
        }

        public function __toString() {
            return $this->firstName . " " . $this->secondName;
        }
    }

    class Guest extends Person {
        public $yearOfBirth;

        public function __construct($firstName, $secondName, $yearOfBirth) {
            parent::__construct($firstName, $secondName);
            $this->yearOfBirth = $yearOfBirth;
        }

        public function __toString() {
            return parent::__toString() . " - " . $this->yearOfBirth;
        }
    }

    class Payer extends Person {
        public $address;

        public function __construct($firstName, $secondName, $address) {
            parent::__construct($firstName, $secondName);
            $this->address = $address;
        }

        public function __toString() {
            return parent::__toString() . " - " . $this->address;
        }
    }

    $person = new Person("Marco", "Rossi");
    echo($person . "<br>");
    $guest = new Guest("Giovanni", "Storti", "1995");
    echo($guest . "<br>");
    $payer = new Payer("Aldo", "Baglio", "Vicolo Corto 19, Milano");
    echo($payer);
