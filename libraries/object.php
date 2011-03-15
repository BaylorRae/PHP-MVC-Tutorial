<?php

// available to all extending classes
class Object {
  
  public static $__user_vars = array();
  
  public function __set($name, $value) {
    self::$__user_vars[$name] = $value;
  }
  
  public function __get($name) {
    return (isset(self::$__user_vars[$name])) ? self::$__user_vars[$name] : null;
  }
  
  public function get_user_vars($class) {
    $vars = get_object_vars($class);
    
    self::$__user_vars = array_merge($vars, self::$__user_vars);
  }
}