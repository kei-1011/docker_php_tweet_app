<?php
Class User{
  protected $pdo;

  /**
   *  @return $pdo
   */
  function __construct($pdo) {
    $this->pdo = $pdo;
  }
}
