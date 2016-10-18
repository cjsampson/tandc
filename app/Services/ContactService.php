<?php

namespace App\Services;

use App;
use App\Repositories\ContactRepository;
use League\Flysystem\Exception;


class ContactService
{

    /**
     * @var ContactRepository
     */
    protected $contactRepository;


    public function __construct( ContactRepository $contactRepository )
    {
        $this->contactRepository = $contactRepository;
    }

    public function create(array $attributes)
    {
        try{
            $this->contactRepository->create($attributes);
        }
        catch (Exception $e){

        }
    }

    public function sendEmail()
    {

    }
}
