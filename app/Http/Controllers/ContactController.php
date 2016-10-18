<?php

namespace App\Http\Controllers;

use App\Services\ContactService;
use Illuminate\Http\Request;

use App\Http\Requests;
use League\Flysystem\Exception;

class ContactController extends Controller
{

    protected $contactService;

    public function __construct( ContactService $contactService )
    {
        $this->contactService = $contactService;
    }

    public function index( Request $request )
    {
        return view('sections.contact.index');
    }

    public function store( Request $request )
    {
        try {
            $this->contactService->create($request->all());
            $this->contactService->sendEmail($request->all());
        } catch ( Exception $e ) {

        }
    }
}
