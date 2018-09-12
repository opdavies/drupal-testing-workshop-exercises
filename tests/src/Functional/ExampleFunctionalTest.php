<?php

namespace Drupal\Tests\workshop\Functional;

use Drupal\Tests\BrowserTestBase;

class ExampleFunctionalTest extends BrowserTestBase {

  protected static $modules = ['workshop'];

  public function testExamplePage() {
    $this->drupalGet('/example-one');

    $this->assertSession()->statusCodeEquals(200);
  }
  
}
