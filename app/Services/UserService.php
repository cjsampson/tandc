<?php

namespace App\Services;

use App\Repositories\UserRepository;

class UserService
{
    /**
     * @var UserRepository
     */
    protected $userRepository;

    /**
     * UserService constructor.
     * @param UserRepository $userRepository
     */
    public function __construct( UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * @return mixed
     * returns all admins in the database
     */
    public function admins()
    {
        return $this->userRepository->admins();
    }

    /**
     * @return array
     * returns all admins email
     */
    public function adminsEmail()
    {
        foreach ($this->admins() as $admin){
            $adminEmail[] = $admin->email;
        }

        return $adminEmail;
    }
}
