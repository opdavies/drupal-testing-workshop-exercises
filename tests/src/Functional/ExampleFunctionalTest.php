<?php

namespace Drupal\Tests\drupaltest\Functional;

use Drupal\Tests\BrowserTestBase;

class ExampleFunctionalTest extends BrowserTestBase {

  protected static $modules = ['drupaltest'];

  public function testExamplePage() {
    $this->drupalGet('/example-one');

    $this->assertSession()->statusCodeEquals(200);
  }
  
}
