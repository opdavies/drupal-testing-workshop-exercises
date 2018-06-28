<?php

namespace Drupal\Tests\drupaltest\Unit;

use Drupal\drupaltest\Services\Calculator;
use Drupal\Tests\UnitTestCase;

class ExampleUnitTest extends UnitTestCase {

  public function testAdd() {
    $this->assertEquals(5, (new Calculator(3))->add(2)->calculate());
  }
  
}
