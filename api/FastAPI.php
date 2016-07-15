<?php
/*
 * ████████████████████████████████████████████████████████
 * ██─────██──────██─────██──────██──────██──────██──────██
 * ██──█████──██──██──███████──████──██──██──██──████──████
 * ██─────██──────██─────████──████──────██──────████──████
 * ██──█████──██──█████──████──████──██──██──████████──████
 * ██──█████──██──██─────████──████──██──██──██████──────██
 * ████████████████████████████████████████████████████████
 * 
 * @license MIT
 * 
 * @package api
 * 
 * @create-date 15.07.2016
 * 
 */
namespace api {
  
  /*
   * Main class 
   * @author Serge Shkurko
   */
  class FastAPI {
  
    /*
     * @const VERSION Core version
     */
    const VERSION = 1.0;
  
    /*
     * @var array $core Main core array
     */
    protected $core = array ();
  
    /* 
     * @void __construct Main constructor
     * @param $_GET['_action'] request action
     * @param $_GET['_method'] request action method
     * @param $_GET['_parametrs'] action parametrs
     */
    public function __construct () {
      echo 'I work!';
      
      $action = $_GET['_action'] ?? 'dne';
      
      $method = $_GET['_method'] ?? 'dne';
      
      $action = $_GET['_parametrs'] ?? 'dne';
      
    }
  
  }
  
  new FastAPI;
  
}