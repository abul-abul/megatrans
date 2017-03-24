<?php

namespace App\Services;

use App\Contracts\ServiceInterface;
use App\Service;

class ServiceService implements ServiceInterface
{

    /**
     * ArticleService constructor.
     */
    public function __construct()
    {
        $this->service = new Service();
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->service->get();
    }

    /**
     * @return mixed
     */
    public function getAllPaginate()
    {
        return $this->service->paginate(5);
    }


    /**
     * @param $data
     * @return mixed
     */
    public function createData($data)
    {
        return $this->service->create($data);
    }


    /**
     * @param $id
     * @return mixed
     */
    public function getOne($id)
    {
        return $this->service->find($id);
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
        return $this->service->first();
    }




}