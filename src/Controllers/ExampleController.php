<?php

namespace Drupal\drupaltest\Controllers;

use Drupal\Core\Controller\ControllerBase;

class ExampleController extends ControllerBase {

  public function index() {
    return ['#markup' => $this->t('Drupal Testing Workshop')];
  }

}
