<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\RequestInterface;
use App\Contracts\ContactInterface;

class BaseController extends Controller
{
    /**
     * BaseController constructor.
     * @param ContactInterface $contactRepo
     * @param RequestInterface $requestRepo
     */
    public function __construct(ContactInterface $contactRepo,RequestInterface $requestRepo)
    {
        $request = $requestRepo->getPassiveRequest();
        $contact = $contactRepo->getPassiveContact();
        $data = [
            'request_active' => $request,
            'contact_active' => $contact
        ];

        view()->share($data);
    }
}
