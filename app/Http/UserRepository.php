<?php

namespace App\Http;

use App\Models\User;

class UserRepository
{
    /**
     * @var User
     */
    private $user;

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function register()
    {

    }
}
