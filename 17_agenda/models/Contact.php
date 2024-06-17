<?php

    class Contact {
        private $name;
        private $phone;
        private $observations;

        function __construct($name, $phone, $observations){
            $this->name = $name;
            $this->phone = $phone;
            $this->observations = $observations;
        }

        function getName(){
            return $this->name;
        }

        function setName($name){
            $this->name = $name;
        }

        function getPhone(){
            return $this->phone;
        }

        function setPhone($phone){
            $this->phone = $phone;
        }

        function getObservations(){
            return $this->observations;
        }

        function setObservations($observations){
            $this->observations = $observations;
        }

    }

    interface ContactDAOInterface{
        public function createContact(Contact $contact);
        public function updateContact(Contact $contact, $id);
        public function deleteContact($id);

    }