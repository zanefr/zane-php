<?php
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/
class User {
    //properties are attributes that belong to a class
     // Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes

    public $name;
    public $email;
    public $password;

    //a constructor is a method that runs when an object is created
    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;

        echo 'constructor ran';
    }

// Methods are functions that belong to a class.
function set_name($name) {
    $this->name = $name;
}
function get_name($name) {
    return $this->name;
}
}

    //Instantiate a user object
    $user1 = new User('Brad', 'brad@gmail.com', 'pass1');
    $user2 = new User('John', 'john@gmai.com', 'word2');

    // echo user1->email;
    // echo user2->name;

    // inheritance
    /*
  Inheritence is the ability to create a new class from an existing class.
  It is achieved by creating a new class that extends an existing class.
*/
    class Employee extends User {
        public function __construct($name, $email, $password, $title) 
        {
            parent::__construct($name, $email, $password);
            $this->title = $title;
        }
        public function get_title() {
            return $this->title;
        }
    }
$employee1 = new Employee('Sara', 'sara@gmail.com', 'paw112', 'Manager');

echo $employee1->get_title();



    
    // var_dump($user1);


?>