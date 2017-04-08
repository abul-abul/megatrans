<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contracts\PartnersInterface;
use App\Contracts\GalleryInterface;
use App\Contracts\AboutInterface;
use App\Contracts\RequestInterface;
use App\Contracts\ContactInterface;
use App\Contracts\BlogInterface;
use App\Contracts\BlogGalleryInterface;
use App\Contracts\ServiceInterface;
use App\Contracts\ServiceSkillInterface;
use View;
use Session;
use Validator;
use Auth;
use File;

class UsersController extends BaseController
{
    /**
     * UsersController constructor.
     * @param ContactInterface $contactRepo
     * @param RequestInterface $requestRepo
     */
    public function __construct(ContactInterface $contactRepo,RequestInterface $requestRepo,ServiceInterface $serviceRepo)
    {
        parent::__construct($contactRepo,$requestRepo,$serviceRepo);
        $this->middleware('language');
    }

    /**
     * @param ServiceInterface $serviceRepo
     * @param GalleryInterface $galleryRepo
     * @param PartnersInterface $partnerRepo
     * @return View
     */
    public function getHome(
                        ServiceInterface $serviceRepo,
                        GalleryInterface $galleryRepo,
                        PartnersInterface $partnerRepo
                            )
    {
        $service = $serviceRepo->getAll();
        $gallery = $galleryRepo->getAll();
        $partners = $partnerRepo->getAll();
        $data = [
            'homeactive' => 1,
            'services' => $service,
            'gallerys' => $gallery,
            'partners' => $partners
        ];
        return view('users.home.home',$data);
    }

    /**
     * @param BlogInterface $blogRepo
     * @param ServiceInterface $serviceRepo
     * @return View
     */
    public function getBlog(BlogInterface $blogRepo,ServiceInterface $serviceRepo)
    {
        $result = $blogRepo->getAllPaginate();
        $service = $serviceRepo->getAll();

        $data = [
            'blogs' => $result,
            'services' => $service,
            'blogactive' => 1
        ];
        return view('users.blog.blog',$data);
    }

    /**
     * @param $id
     * @param BlogInterface $blogRepo
     * @param ServiceInterface $serviceRepo
     * @param BlogGalleryInterface $blogGalleryRepo
     * @return View
     */
    public function getInnerBlog($id,
                                 BlogInterface $blogRepo,
                                 ServiceInterface $serviceRepo,
                                 BlogGalleryInterface $blogGalleryRepo
                                )
    {
        $result = $blogRepo->getOne($id);
        if(count($result) == null){
            abort(404);
        }
        $service = $serviceRepo->getAll();
        $gallery = $blogGalleryRepo->getBlog($id);
        $data = [
            'gallerys' => $gallery,
            'blog' => $result,
            'services' => $service,
            'blogactive' => 1
        ];

        return view('users.blog.blog-inner',$data);
    }

    /**
     * @param RequestInterface $requestRepo
     * @param ServiceInterface $serviceRepo
     * @return View
     */
    public function getRequest(RequestInterface $requestRepo,ServiceInterface $serviceRepo)
    {
        $service = $serviceRepo->getAll();
        $data = [
            'services' => $service,
            'requestactive' => 1,
        ];
        return view('users.request.request',$data);
    }

    /**
     * @param Request $request
     * @param RequestInterface $requestRepo
     * @return mixed
     */
    public function postRequest(request $request,RequestInterface $requestRepo)
    {
        $result = $request->all();
        $validator = Validator::make($result, [
            'contact_person' => 'required',
            'email' => 'required|email',
            'tel' => 'required|numeric',
            'cargo_description' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }else{
            unset($result['_token']);
            $requestRepo->createData($result);
            return redirect()->back()->with('message','Your request sent successfully');
        }
    }

    /**
     * @param ContactInterface $contactRepo
     * @return View
     */
    public function getContact(ContactInterface $contactRepo,ServiceInterface $serviceRepo)
    {
        $service = $serviceRepo->getAll();

        $data = [
            'services' => $service,
            'contactactive' => 1,
        ];
        return view('users.contact.contact',$data);
    }

    /**
     * @param Request $request
     * @param ContactInterface $contactRepo
     * @return mixed
     */
    public function postContact(request $request,ContactInterface $contactRepo)
    {
        $result = $request->all();
        $validator = Validator::make($result, [
            'name' => 'required',
            'email' => 'required|email',
            'team' => 'required',
            'message' => 'required',
            'team' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }else{
            unset($result['_token']);
            $contactRepo->createData($result);
        }
        return redirect()->back()->with('message','Thanks for your message');
    }

    /**
     * @param AboutInterface $aboutRepo
     * @param ServiceInterface $serviceRepo
     * @return View
     */
    public function getAbout(AboutInterface $aboutRepo,ServiceInterface $serviceRepo)
    {
        $result = $aboutRepo->getFirstRow();
        $service = $serviceRepo->getAll();
        $data = [
            'services' => $service,
            'activeabout' => 1,
            'about' => $result
        ];
        return view('users.about.about',$data);
    }

    /**
     * @param $id
     * @param ServiceInterface $serviceRepo
     * @param ServiceSkillInterface $skillRepo
     * @return View
     */
    public function getService($id,ServiceInterface $serviceRepo,ServiceSkillInterface $skillRepo)
    {
        $result = $serviceRepo->getOne($id);
        if(count($result) == ''){
            abort(404);
        }
        $all_services = $serviceRepo->getAllExpect($id);
        $skills = $skillRepo->getService($id);
        $data = [
            'services' => $all_services,
            'service' => $result,
            'skills' => $skills,
            'serviceactive' => 1
        ];

        return view('users.service.service',$data);
    }

}
