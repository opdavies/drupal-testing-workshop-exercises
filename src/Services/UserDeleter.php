<?php

namespace Drupal\drupaltest\Services;

use Drupal\Core\Session\AccountInterface;

class UserDeleter {

  public function delete(AccountInterface $user) {
    user_delete($user->id());
  }

}
