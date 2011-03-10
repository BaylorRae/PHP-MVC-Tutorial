<?php

class Map {
  
  public static function get($route, $callback) {
  	Sammy::process($route, 'GET');
  }

  public static function post($route, $callback) {
  	Sammy::process($route, 'POST');
  }

  public static function put($route, $callback) {
  	Sammy::process($route, 'PUT');
  }

  public static function delete($route, $callback) {
  	Sammy::process($route, 'DELETE');
  }

  public static function ajax($route, $callback) {
  	Sammy::process($route, 'XMLHttpRequest');
  }
  
  public static function dispatch() {
    // runs when find a matching route
    
    // find the controller
    
    // find the action
    
    // include the app_controller
    
    // include the matching route controller
    
    // run the matching action
    
    // include the view file
  }
  
}