<?php

class Map {
  public static $path = null;
  
  public static function get($route, $path) {
    self::$path = $path;
  	Sammy::process($route, 'GET');
  }

  public static function post($route, $path) {
    self::$path = $path;
  	Sammy::process($route, 'POST');
  }

  public static function put($route, $path) {
    self::$path = $path;
  	Sammy::process($route, 'PUT');
  }

  public static function delete($route, $path) {
    self::$path = $path;
  	Sammy::process($route, 'DELETE');
  }

  public static function ajax($route, $path) {
    self::$path = $path;
  	Sammy::process($route, 'XMLHttpRequest');
  }
  
  public static function dispatch($format) {
    
    // runs when find a matching route
    $path = explode('#', self::$path);
    $controller = $path[0];
    $action = $path[1];
    
    $class_name = ucfirst($controller) . 'Controller';
        
    // include the app_controller
    self::load_controller('app');
    
    // include the matching route controller
    self::load_controller($controller);
    
    if( class_exists($class_name) ) {
      $tmp_class = new $class_name();
      
      // run the matching action
      if( is_callable(array($tmp_class, $action)) ) {
        $tmp_class->$action();
      }else
        die('The action <strong>' . $action . '</strong> could not be called from the controller <strong>' . $class_name . '</strong>');
    }else
      die('The class <strong>' . $class_name . '</strong> could not be found in <pre>' . APP_PATH . 'controllers/' . $controller . '_controller.php</pre>');
        
    // include the view file
    self::load_view($controller, $action, $format);
  }
  
  public static function load_controller($name) {
    $controller_path = APP_PATH . 'controllers/' . $name . '_controller.php';
    if( file_exists($controller_path) )
      include_once $controller_path;
    else
      die('The file <strong>' . $name . '_controller.php</strong> could not be found at <pre>' . $controller_path . '</pre>');
  }
  
  public static function load_view($controller, $action, $format) {
    $view_path = APP_PATH . 'views/' . $controller . '/' . $action . '.' . $format . '.php';
    if( file_exists($view_path) )
      include_once $view_path;
  }
  
}