<?php

namespace App\Services;

use App\Contracts\ServiceSkillInterface;
use App\ServiceSkill;

class ServiceSkillService implements ServiceSkillInterface
{

    /**
     * ArticleService constructor.
     */
    public function __construct()
    {
        $this->service_skill = new ServiceSkill();
    }

    /**
     * @return mixed
     */
    public function getAll()
    {
        return $this->service_skill->get();
    }

    /**
     * @return mixed
     */
    public function getAllPaginate()
    {
        return $this->service_skill->paginate(5);
    }


    /**
     * @param $data
     * @return mixed
     */
    public function createData($data)
    {
        return $this->service_skill->create($data);
    }


    /**
     * @param $id
     * @return mixed
     */
    public function getOne($id)
    {
        return $this->service_skill->find($id);
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
        return $this->service_skill->first();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getService($id)
    {
        return $this->service_skill->where('service_id',$id)->get();
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getDeleteEmptySkills($id)
    {
        return $this->service_skill->where('service_id',$id)->where('skill_en',null)->where('skill_arm',null)->where('skill_rus',null)->delete();
    }


}