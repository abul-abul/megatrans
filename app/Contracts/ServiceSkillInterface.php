<?php

namespace App\Contracts;

interface ServiceSkillInterface
{
    /**
     * @return mixed
     */
    public function getAll();

    /**
     * @return mixed
     */
    public function getAllPaginate();

    /**
     * @param $data
     * @return mixed
     */
    public function createData($data);

    /**
     * @param $id
     * @return mixed
     */
    public function getOne($id);

    /**
     * @param $id
     * @param $data
     * @return mixed
     */
    public function getUpdateData($id,$data);


    /**
     * @param $id
     * @return mixed
     */
    public function deleteData($id);

    /**
     * @return mixed
     */
    public function getFirstRow();

    /**
     * @param $id
     * @return mixed
     */
    public function getService($id);

    /**
     * @param $id
     * @return mixed
     */
    public function getDeleteEmptySkills($id);
}
