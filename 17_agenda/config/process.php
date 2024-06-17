<?php


  require_once("connection.php");
  require_once("url.php");
  require_once(__DIR__ . "/../models/Contact.php");
  require_once(__DIR__ . "/../dao/ContactDAO.php");

  $type = filter_input(INPUT_POST, "type");

  $contactDAO = new ContactDAO($conn);

  // MODIFICAÇÕES NO BANCO
  if(!empty($type)) {

    // Criar contato
    if($type === "create") {

      $name = filter_input(INPUT_POST, "name");
      $phone = filter_input(INPUT_POST, "phone");
      $observations = filter_input(INPUT_POST, "observations");

      $contact = new Contact($name, $phone, $observations);

      $contactDAO->createContact($contact);

    } else if($type === "edit") {

      $name = filter_input(INPUT_POST, "name");
      $phone = filter_input(INPUT_POST, "phone");
      $observations = filter_input(INPUT_POST, "observations");
      $id = filter_input(INPUT_POST, "id");

      $contact = new Contact($name, $phone, $observations);

      $contactDAO->updateContact($contact, $id);

    } else if($type === "delete") {
      $id = filter_input(INPUT_POST, "id");

      $contactDAO->deleteContact($id);

    }

    // Redirect HOME
    header("Location:" . $BASE_URL . "../index.php");

  // SELEÇÃO DE DADOS
  } else {
    
    $id;

    if(!empty($_GET)) {
      $id = $_GET["id"];
    }

    // Retorna o dado de um contato
    if(!empty($id)) {

      $query = "SELECT * FROM contacts WHERE id = :id";

      $stmt = $conn->prepare($query);

      $stmt->bindParam(":id", $id);

      $stmt->execute();

      $contact = $stmt->fetch();

    } else {

      // Retorna todos os contatos
      $contacts = [];

      $query = "SELECT * FROM contacts";

      $stmt = $conn->prepare($query);

      $stmt->execute();
      
      $contacts = $stmt->fetchAll();

    }

  }

  // FECHAR CONEXÃO
  $conn = null;