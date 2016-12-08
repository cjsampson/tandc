<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use League\Flysystem\Exception;
use App\Services\ContactService;
use Illuminate\Database\QueryException;

class ContactController extends Controller
{

    /**
     * @var ContactService
     */
    protected $contactService;

    /**
     * ContactController constructor.
     * @param ContactService $contactService
     */
    public function __construct( ContactService $contactService )
    {
        $this->contactService = $contactService;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index( Request $request )
    {
        return view('sections.contact.index');
    }

    /**
     * @param Request $request
     */
    public function store( Request $request )
    {
        try {
            $this->contactService->createAndSend($request->all());
        } catch ( QueryException $e ) {
            dd($e);
        } catch ( Exception $e ) {
            dd($e);
        }

        return redirect('/');
    }
}
