<?php

namespace Drupal\drupaltest\Service;

class Calculator {

  private $total;

  public function __construct($value) {
    $this->total = $value;
  }

  public function add($value) {
    $this->total += $value;

    return $this;
  }

  public function calculate() {
    return $this->total;
  }

}
