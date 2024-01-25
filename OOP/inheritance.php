<?php
  class Employee {
    public $username;
    public $password;

    public function __construct($username, $password) {
      $this->username = $username;
      $this->password = $password;
    }
  }

  class Manager extends Employee {
    public function __construct($username, $password) {
      parent::__construct($username, $password);
      $this->username = $username;
      $this->password = $password;
    }

    public function get_title() {
      return $this->username;
    }
  }

  $manager1 = new Manager('ManagerM8', 'password');
  echo $manager1->get_title();
?>