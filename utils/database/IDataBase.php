<?php
/*
 * 
 */
namespace utils\database;

interface IDataBase {
  
  /*
   * 
   */
  protected static $instance;
  
  /*
   * 
   */
  public function query () {}
  
  /*
   * 
   */
  public function fetch_assoc () {}
  
}