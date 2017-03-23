<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Requests\AdminLoginRequest;
use App\Contracts\PartnersInterface;
use App\Contracts\GalleryInterface;
use App\Contracts\AboutInterface;
use App\Contracts\RequestInterface;
use App\Contracts\ContactInterface;

use View;
use Session;
use Validator;
use Auth;
use File;


class AdminController extends BaseController
{
	/**
     * AdminController constructor.
     */
    public function __construct(ContactInterface $contactRepo,RequestInterface $requestRepo)
    {
        parent::__construct($contactRepo,$requestRepo);
        $this->middleware('authadmin', ['except' => ['getLogin', 'postLogin','getLogout']]);
    }


    /**
     * @return mixed
     */
    public function getLogin()
    {
        return view('admin.admin-login.admin-login');
    }

    /**
     * @param AdminLoginRequest $request
     * @return mixed
     */
    public function postLogin(AdminLoginRequest $request)
    {
    	$name = $request->get('name');
        $password  = $request->get('password');

        if(Auth::attempt ([
            'name'=>$name,
            'password'=>$password,
        ]))
        {
            return redirect()->action('AdminController@getDashboard');
        }else{
            return redirect()->back()->with('error', 'Invalid login or password');
        }	
    }

    /**
     * @return mixed
     */
    public function getLogout()
    {
    	Auth::logout();
        return redirect()->action('AdminController@getLogin');
    }

    /**
     * @return View
     */
    public function getDashboard()
    {
    	return view('admin.dashboard.dashboard');
    }

    /**
     * @param PartnersInterface $partnerRepo
     * @return View
     */
    public function getPartners(PartnersInterface $partnerRepo)
    {
        $result = $partnerRepo->getAll();
        $data = [
            'partners' => $result,
            'activepartners' => 1
        ];
        return view('admin.partners.partners',$data);
    }

    /**
     * @return View
     */
    public function getAddPartners()
    {
        $data = [
            'activepartners' => 1
        ];
        return view('admin.partners.add-partners',$data);

    }

    /**
     * @param Request $request
     * @param PartnersInterface $partnersRepo
     * @return mixed
     */
    public function postAddPartners(request $request,PartnersInterface $partnersRepo)
    {
        $result = $request->all();
        $validator = Validator::make($result, [
            'link' => 'required',
            'images' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }else{
            unset($result['_token']);
            $logoFile = $result['images']->getClientOriginalExtension();
            $name = str_random(12);
            $path = public_path() . '/assets/images/partners-images';
            $result_move = $result['images']->move($path, $name.'.'.$logoFile);
            $article_images = $name.'.'.$logoFile;
            $result['images'] = $article_images;
            $partnersRepo->createData($result);
            return redirect()->action('AdminController@getPartners')->with('message','You added partners');
        }
    }

    /**
     * @param $id
     * @param PartnersInterface $partnersRepo
     * @return mixed
     */
    public function getPartnersDelete($id,PartnersInterface $partnersRepo)
    {
        $file = $partnersRepo->getOne($id);
        $filename = public_path() . '/assets/images/partners-images/' . $file['images'];
        $status = File::delete($filename);
        $partnersRepo->deleteData($id);
        return redirect()->back()->with('message','Deleted Successfully');
    }

    /**
     * @param GalleryInterface $galleryRepo
     * @return View
     */
    public function getGallery(GalleryInterface $galleryRepo)
    {
        $result = $galleryRepo->getAll();
        $data = [
            'galleryactive' => 1,
            'gallerys' => $result
        ];
        return view('admin.gallery.gallery',$data);
    }

    /**
     * @param $id
     * @param GalleryInterface $galleryRepo
     * @return mixed
     */
    public function getGalleryDelete($id,GalleryInterface $galleryRepo)
    {
        $file = $galleryRepo->getOne($id);
        $filename = public_path() . '/assets/images/gallery-images/' . $file['images'];
        $status = File::delete($filename);
        $galleryRepo->deleteData($id);
        return redirect()->back()->with('message','Deleted Successfully');
    }

    /**
     * @return View
     */
    public function getAddGallery()
    {
        $data = [
            'galleryactive' => 1,
        ];
        return view('admin.gallery.add-gallery',$data);
    }

    /**
     * @param Request $request
     * @param GalleryInterface $galleryRepo
     * @return mixed
     */
    public function postAddGallery(request $request,GalleryInterface $galleryRepo)
    {
        $result = $request->all();
        $validator = Validator::make($result, [
            'images' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }else{
            unset($result['_token']);
            $logoFile = $result['images']->getClientOriginalExtension();
            $name = str_random(12);
            $path = public_path() . '/assets/images/gallery-images';
            $result_move = $result['images']->move($path, $name.'.'.$logoFile);
            $article_images = $name.'.'.$logoFile;
            $result['images'] = $article_images;
            $result['role'] = 'home';
            $galleryRepo->createData($result);
            return redirect()->action('AdminController@getGallery')->with('message','You added partners');
        }
    }

    /**
     * @param $id
     * @param GalleryInterface $galleryRepo
     * @return View
     */
    public function getEditGallery($id,GalleryInterface $galleryRepo)
    {
        $row = $galleryRepo->getOne($id);
        $data = [
            'galleryactive' => 1,
            'gallery' => $row
        ];
        return view('admin.gallery.edit-gallery',$data);
    }

    /**
     * @param Request $request
     * @param GalleryInterface $galleryRepo
     * @return mixed
     */
    public function postEditGallery(request $request,GalleryInterface $galleryRepo)
    {
        $result = $request->all();
        if(isset($result['images'])){
            $row = $galleryRepo->getOne($result['id']);
            $path = public_path() . '/assets/images/gallery-images/' . $row['images'];
            File::delete($path);
            $logoFile = $result['images']->getClientOriginalExtension();
            $name = str_random(12);
            $path = public_path() . '/assets/images/gallery-images';
            $result_move = $result['images']->move($path, $name.'.'.$logoFile);
            $gallery_images = $name.'.'.$logoFile;
            $result['images'] = $gallery_images;
            $galleryRepo->getUpdateData($result['id'],$result);
        }else{
            $galleryRepo->getUpdateData($result['id'],$result);
        }
        return redirect()->action('AdminController@getGallery')->with('message','Edit was succesfully');
    }

    /**
     * @param AboutInterface $aboutRepo
     * @return View
     */
    public function getAbout(AboutInterface $aboutRepo)
    {
        $result = $aboutRepo->getFirstRow();
        $data = [
            'activeabout' => 1,
            'abouts' => $result
        ];
        return view('admin.about.about',$data);
    }

    /**
     * @return View
     */
    public function getAddAbout()
    {
        $data = [
            'activeabout' => 1,
        ];
        return view('admin.about.add-about',$data);
    }

    /**
     * @param $id
     * @param AboutInterface $aboutRepo
     * @return View
     */
    public function getEditAbout($id,AboutInterface $aboutRepo)
    {
        $row = $aboutRepo->getOne($id);
        $data = [
            'about' => $row,
            'activeabout' => 1,
        ];
        return view('admin.about.edit-about',$data);
    }

    /**
     * @param Request $request
     * @param AboutInterface $aboutRepo
     * @return mixed
     */
    public function postEditAbout(request $request,AboutInterface $aboutRepo)
    {
        $result = $request->all();
        if(isset($result['images'])){
            $row = $aboutRepo->getOne($result['id']);
            $path = public_path() . '/assets/images/about-images/' . $row['images'];
            File::delete($path);
            $logoFile = $result['images']->getClientOriginalExtension();
            $name = str_random(12);
            $path = public_path() . '/assets/images/about-images';
            $result_move = $result['images']->move($path, $name.'.'.$logoFile);
            $gallery_images = $name.'.'.$logoFile;
            $result['images'] = $gallery_images;
            $aboutRepo->getUpdateData($result['id'],$result);
        }else{
            $aboutRepo->getUpdateData($result['id'],$result);
        }
        return redirect()->action('AdminController@getAbout')->with('message','Edit was succesfully');
    }

    /**
     * @param Request $request
     * @param AboutInterface $aboutRepo
     * @return mixed
     */
    public function postAddAbout(request $request,AboutInterface $aboutRepo)
    {
        $result = $request->all();
        $validator = Validator::make($result, [
            'images' => 'required',
        ]);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator);
        }else{
            unset($result['_token']);
            $logoFile = $result['images']->getClientOriginalExtension();
            $name = str_random(12);
            $path = public_path() . '/assets/images/about-images';
            $result_move = $result['images']->move($path, $name.'.'.$logoFile);
            $article_images = $name.'.'.$logoFile;
            $result['images'] = $article_images;
            $result['role'] = 'home';
            $aboutRepo->createData($result);
            return redirect()->action('AdminController@getAbout')->with('message','You added partners');
        }
    }

    /**
     * @param $id
     * @param AboutInterface $aboutRepo
     * @return mixed
     */
    public function getAboutDelete($id,AboutInterface $aboutRepo)
    {
        $file = $aboutRepo->getOne($id);
        $filename = public_path() . '/assets/images/about-images/' . $file['images'];
        $status = File::delete($filename);
        $aboutRepo->deleteData($id);
        return redirect()->back()->with('message','Deleted Successfully');
    }

    /**
     * @param RequestInterface $requestRepo
     * @return View
     */
    public function getRequest(RequestInterface $requestRepo)
    {
        $result = $requestRepo->getAll();
        $data = [
            'requestactive' => 1,
             'requests' => $result
        ];
        return view('admin.request.request',$data);
    }

    /**
     * @param $id
     * @param RequestInterface $requestRepo
     * @return View
     */
    public function getViewRequest($id,RequestInterface $requestRepo)
    {
        $result = $requestRepo->getOne($id);
        $dataActive = [
            'active_view' => 1
        ];
        $requestRepo->getUpdateData($id,$dataActive);
        $data = [
            'requestactive' => 1,
            'request' => $result
        ];
        return view('admin.request.view-request',$data);
    }

    /**
     * @param $id
     * @param RequestInterface $requestRepo
     * @return mixed
     */
    public function getRequestDelete($id,RequestInterface $requestRepo)
    {
        $requestRepo->deleteData($id);
        return redirect()->back()->with('message','Deleted Successfully');
    }

    /**
     * @param ContactInterface $contactRepo
     * @return View
     */
    public function getConntact(ContactInterface $contactRepo)
    {
        $contact = $contactRepo->getAll();
        $data = [
            'contactactive' => 1,
            'contacts' => $contact
        ];
        return view('admin.contact.contact',$data);
    }

    /**
     * @param $id
     * @param ContactInterface $contactRepo
     * @return mixed
     */
    public function getDeleteContact($id,ContactInterface $contactRepo)
    {
        $contactRepo->deleteData($id);
        return redirect()->back()->with('message','Deleted Successfully');
    }

    /**
     * @param $id
     * @param ContactInterface $contactRepo
     * @return View
     */
    public function getViewContact($id,ContactInterface $contactRepo)
    {
        $result = $contactRepo->getOne($id);
        $dataActive = [
            'active_view' => 1
        ];
        $contactRepo->getUpdateData($id,$dataActive);
        $data = [
            'contactactive' => 1,
            'contact' => $result
        ];
        return view('admin.contact.view-contact',$data);
    }

}
