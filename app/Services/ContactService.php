<?php

namespace App\Services;

use App\Contracts\ContactInterface;
use App\Contact;

class ContactService implements ContactInterface
{

    /**
     * ArticleService constructor.
     */
    public function __construct()
    {
        $this->contact = new Contact();
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->contact->get();
    }

    /**
     * @return mixed
     */
    public function getAllPaginate()
    {
        return $this->contact->paginate(5);
    }


    /**
     * @param $data
     * @return mixed
     */
    public function createData($data)
    {
        return $this->contact->create($data);
    }


    /**
     * @param $id
     * @return mixed
     */
    public function getOne($id)
    {
        return $this->contact->find($id);
    }

    /**
     * @param $id
     * @param $data
     * @return mixed
     */
    public function getUpdateData($id,$data)
    {
        return $this->getOne($id)->update($data);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteData($id)
    {
        return $this->getOne($id)->delete();
    }

    /**
     * @return mixed
     */
    public function getFirstRow()
    {
        return $this->contact->first();
    }

    /**
     * @return mixed
     */
    public function getPassiveContact()
    {
        return $this->contact->where('active_view',null)->get();
    }


}