<?php

// available to all extending classes
class Object {
  
  public static $user_vars = array();
  
  public function __set($name, $value) {
    self::$user_vars[$name] = $value;
  }
  
  public function __get($name) {
    return (isset(self::$user_vars[$name])) ? self::$user_vars[$name] : null;
  }
  
}