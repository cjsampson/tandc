<?php

namespace App\Services;

use App\Models\User;
use DB;
use Mail;
use App\Repositories\ContactRepository;


class ContactService
{

    /**
     * @var ContactRepository
     */
    protected $contactRepository;
    protected $userService;


    /**
     * ContactService constructor.
     * @param ContactRepository $contactRepository
     */
    public function __construct( ContactRepository $contactRepository, UserService $userService )
    {
        $this->contactRepository = $contactRepository;
        $this->userService = $userService;
    }

    /**
     * @param array $attributes
     */
    private function create( array $attributes )
    {
        $this->contactRepository->create($attributes);
    }

    /**
     * @param array $attributes
     */
    private function sendEmail( array $attributes )
    {
        $adminsEmail = $this->userService->adminsEmail();
        Mail::send('sections.contact.email', ['body' => $attributes['message']], function ( $message ) use ( $attributes, $adminsEmail) {
            $message->from($attributes['email'])
                ->subject($attributes['title'])
                ->to($adminsEmail);
        });
    }

    /**
     * @param array $attributes
     */
    public function createAndSend( array $attributes )
    {
        DB::transaction(function () use ( $attributes ) {
            $this->create($attributes);
            $this->sendEmail($attributes);
        });
    }
}
