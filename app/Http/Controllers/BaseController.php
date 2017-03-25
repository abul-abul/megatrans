<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\RequestInterface;
use App\Contracts\ContactInterface;

class BaseController extends Controller
{
    /**
     * the domain language.
     *
     * @var string
     */
    public $language;

    /**
     * BaseController constructor.
     * @param ContactInterface $contactRepo
     * @param RequestInterface $requestRepo
     */
    public function __construct(ContactInterface $contactRepo,RequestInterface $requestRepo)
    {
        $server = explode('.', \Request::server('HTTP_HOST'));
        $this->language = config('app.locale');
        $this->currentPathWithoutLocale = substr( implode(\Request::segments(), '/'), 3);

        $request = $requestRepo->getPassiveRequest();
        $contact = $contactRepo->getPassiveContact();
        $data = [
            'request_active' => $request,
            'contact_active' => $contact,
            'lang' => $this->language,
            'currentPathWithoutLocale'  => $this->currentPathWithoutLocale,
        ];
        view()->share($data);
    }
}
