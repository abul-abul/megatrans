<?php

namespace App\Services;

use App\Contracts\RequestInterface;
use App\Request;

class RequestService implements RequestInterface
{

    /**
     * ArticleService constructor.
     */
    public function __construct()
    {
        $this->request = new Request();
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->request->get();
    }

    /**
     * @return mixed
     */
    public function getAllPaginate()
    {
        return $this->request->paginate(5);
    }


    /**
     * @param $data
     * @return mixed
     */
    public function createData($data)
    {
        return $this->request->create($data);
    }


    /**
     * @param $id
     * @return mixed
     */
    public function getOne($id)
    {
        return $this->request->find($id);
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
        return $this->request->first();
    }

    /**
     * @return mixed
     */
    public function getPassiveRequest()
    {
        return $this->request->where('active_view',null)->get();
    }


}