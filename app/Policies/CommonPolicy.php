<?php

namespace App\Policies;

use App\Constant;
use Domain\Security\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CommonPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function manageUniversitas($user) {
        return $user->getRole() === Constant::SA_ROLE || $user->getRole() === Constant::ADMIN_ROLE;
    }
}
