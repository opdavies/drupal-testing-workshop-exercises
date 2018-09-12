<?php

namespace Drupal\Tests\workshop\Unit;

use Drupal\workshop\Service\Calculator;
use Drupal\Tests\UnitTestCase;

class ExampleUnitTest extends UnitTestCase {

  public function testAdd() {
    $this->assertEquals(5, (new Calculator(3))->add(2)->calculate());
  }

}
