<?php

namespace Drupal\Tests\drupaltest\Kernel;

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

    /** @var \Drupal\drupaltest\Services\UserDeleter $user_deleter */
    $user_deleter = \Drupal::service('drupaltest.user_deleter');
    $user_deleter->delete($user);

    $user = $this->reloadEntity($user);

    $this->assertNull($user);
  }
  
}
