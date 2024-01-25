<?php
  class User {
    // Properties are variables/attributes that belong to class
    public $name;
    public $email;
    public $password;

    // Access modifiers define the scope of the given attributes
    // Public - Can be accessed anywhere (global)
    // private - Only from inside the class 
    // protected - Only from inside the class and by inheriting classes

    public function __construct($name, $email, $password) {
      $this->name = $name;
      $this->email = $email;
      $this->password = $password;
    }

    function set_name($name) {
      $this->name = $name;
    }
  }

  $user1 = new User('Matt', 'matt@email.com', 'password');

  // $user1->name = 'Matt';

  $user1->set_name('MattyMoo');

  var_dump($user1);
?>