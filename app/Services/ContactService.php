<?php

namespace App\Services;

use DB;
use Mail;
use App\Repositories\ContactRepository;


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

    private function create( array $attributes )
    {
        $this->contactRepository->create($attributes);
    }

    private function sendEmail( array $attributes )
    {
        Mail::send('sections.contact.email', ['body' => $attributes['message']], function ( $message ) use ( $attributes ) {
            $message->from($attributes['email'])
                ->subject($attributes['title'])
                ->to('tleffew1994@gmail.com', 'test@test.com');
        });
    }

    public function createAndSend( array $attributes )
    {
        DB::transaction(function () use ( $attributes ) {
            $this->create($attributes);
            $this->sendEmail($attributes);
        });
    }
}
