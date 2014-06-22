<?php
class Contacts extends Controller
{
  public function index()
  {
    $contact = $this->loadModel('ContactModel');
    $contacts = $contact->all();
    require 'application/views/_templates/header.php';
    require 'application/views/contacts/index.php';
    require 'application/views/_templates/footer.php';
  }

  public function create()
  {
    if(isset($_POST["submit"])){
    $contact = $this->loadModel('ContactModel');
    $contact->add($_POST["name"], $_POST["email"]);
    }
    header('location: '.URL.'contacts/index');
  }

  public function edit($id)
  {
    $contact = $this->loadModel('ContactModel');
    $contact = $contact->get($id);
    if($contact){
      require 'application/views/_templates/header.php';
      require 'application/views/contacts/edit.php';
      require 'application/views/_templates/footer.php';
    } else {
      header('location: '.URL.'contacts/index');
    }
  }

  public function update()
  {
    if (isset($_POST["submit"])) {
    $contact = $this->loadModel('ContactModel');
    $contact->update($_POST["id"], $_POST["name"], $_POST["email"]);
    }
    header('location: '.URL.'contacts/index');
  }

  public function delete($id)
  {
    if(isset($id)){
      $contact = $this->loadModel('contactmodel');
      $contact->delete($id);
    }
    header('location: '.URL.'contacts/index');
  }
}