<?php

/**
 * A basic data class that models a child.
 * 
 */
class Child {

  private $name;
  private $age;

  public function __construct($name, $age) {
    $this->name = $name;
    $this->age  = $age;
  } 

  public function getName() {
    return $this->name;
  }

  public function getAge() {
    return $this->age;
  }

  public function __toString() {
    return $this->name . " (" . $this->age . ")";
  }

}
