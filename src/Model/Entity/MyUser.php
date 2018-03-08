<?php
namespace App\Model\Entity;

use CakeDC\Users\Model\Entity\User;

/**
 * Application specific User Entity with non plugin conform field(s)
 */
class MyUser extends User
{
    public function parentNode() {
        return ['Roles' => ['id' => $this->role_id]];
    }
}
