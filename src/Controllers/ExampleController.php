<?php

namespace Drupal\drupaltest\Controllers;

use Drupal\Core\StringTranslation\StringTranslationTrait;

class ExampleController {

  use StringTranslationTrait;

  public function index() {
    return ['#markup' => $this->t('Drupal Testing Workshop')];
  }

}
