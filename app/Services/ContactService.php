<?php

namespace App\Services;

use Auth;
use Mail;
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

    public function sendEmail(array $attributes)
    {
        Mail::send('sections.contact.email', ['body' => $attributes['message']], function ( $message ) use ($attributes){
            $message->from($attributes['email'])
                ->subject($attributes['title'])
                ->to('tleffew1994@gmail.com', 'test@test.com');
        });

    }
}
