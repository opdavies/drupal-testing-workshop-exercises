<?php

namespace Drupal\workshop\Service;

use Drupal\Core\Session\AccountInterface;

class UserDeleter {

  public function delete(AccountInterface $user) {
    user_delete($user->id());
  }

}
