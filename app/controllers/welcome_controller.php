<?php

class WelcomeController extends AppController {
  
  public function index() {
    $this->name = 'Baylor';
  }
  
  public function add() {
    // when creating a new db record
    echo 'add action';
  }
  
  public function create() {
    // actually create the record
    echo 'create action';
  }
  
  public function edit() {
    // show the edit form
    echo 'edit action';
  }
  
  public function update() {
    // update the record
    echo 'update action';
  }
  
  public function destroy() {
    // delete a record
    echo 'destroy action';
  }
}