<?php

namespace App\Http\Controllers;

use App\Contracts\ServiceInterface;
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




    private $carrency = 'cache/currency.xml';
    /**
     * BaseController constructor.
     * @param ContactInterface $contactRepo
     * @param RequestInterface $requestRepo
     */
    public function __construct(ContactInterface $contactRepo,RequestInterface $requestRepo,ServiceInterface $serviceRepo)
    {
        $server = explode('.', \Request::server('HTTP_HOST'));
        $this->language = config('app.locale');
        $this->currentPathWithoutLocale = substr( implode(\Request::segments(), '/'), 3);

        $request = $requestRepo->getPassiveRequest();
        $contact = $contactRepo->getPassiveContact();
        $servce = $serviceRepo->getAll();
        $data = [
            'services' => $servce,
            'request_active' => $request,
            'contact_active' => $contact,
            'lang' => $this->language,
            'currentPathWithoutLocale'  => $this->currentPathWithoutLocale,
        ];

        $url = "https://api.privatbank.ua/p24api/pubinfo?exchange&coursid=5";
        $curl = curl_init($url);
        if ( $curl ) {
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            $page = curl_exec($curl);
            curl_close($curl);
            unset($curl);
            $xml = new \SimpleXMLElement($page);
            $data['usd'] = $xml->row[2]->exchangerate;
            $data['eur'] = $xml->row[0]->exchangerate;
            $data['rus'] = $xml->row[1]->exchangerate;

        }

        view()->share($data);
    }


}
