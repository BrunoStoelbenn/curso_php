<?php

    session_start();
    class ContactDAO implements ContactDAOInterface{

        private $conn;

        public function __construct($conn){
            $this->conn = $conn;
        }

        public function createContact(Contact $contact){
            $stmt = $this->conn->prepare("INSERT INTO contacts (name, observations, phone) VALUES (:name, :observations, :phone)");

            $stmt->bindParam(":name", $contact->getName());
            $stmt->bindParam(":observations", $contact->getObservations());
            $stmt->bindParam(":phone", $contact->getPhone());

            try {

                $stmt->execute();
            
              } catch(PDOException $e) {
                // erro na conexão
                $error = $e->getMessage();
                echo "Erro: $error";
              }
        }

        public function updateContact(Contact $contact, $id){
            $stmt = $this->conn->prepare("UPDATE contacts SET
            name = :name,
            phone = :phone,
            observations = :observations
            WHERE id = :id      
          ");
    
          $stmt->bindParam(":name", $contact->getName());
          $stmt->bindParam(":phone", $contact->getPhone());
          $stmt->bindParam(":observations", $contact->getObservations());
          $stmt->bindParam(":id", $id);
          
          try {

            $stmt->execute();
        
          } catch(PDOException $e) {
            // erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
          }
        }

        public function deleteContact($id){
          $stmt = $this->conn->prepare("DELETE FROM contacts WHERE id = :id");

          $stmt->bindParam(":id", $id);

          try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato removido com sucesso!";
        
          } catch(PDOException $e) {
            // erro na conexão
            $error = $e->getMessage();
            echo "Erro: $error";
          }
        }
    }

?>