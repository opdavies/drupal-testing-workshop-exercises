<?php

namespace Drupal\Tests\drupaltest\Kernel;

use Drupal\drupaltest\Services\UserDeleter;
use Drupal\KernelTests\Core\Entity\EntityKernelTestBase;
use Drupal\user\Entity\User;

class ExampleKernelTest extends EntityKernelTestBase {

  public static $modules = ['drupaltest'];

  protected function setUp() {
    parent::setUp();

    $this->installSchema('user', ['users_data']);
  }

  public function testUserDeleter() {
    $user = $this->createUser();

    $this->assertInstanceOf(User::class, $user);

    \Drupal::service(UserDeleter::class)->delete($user);

    $user = $this->reloadEntity($user);

    $this->assertNull($user);
  }

}
