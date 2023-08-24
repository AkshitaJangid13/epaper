<?php

namespace App\Models;

use CodeIgniter\Model;

class EpaperModel extends BaseModel
{
    protected $builder;

    public function __construct()
    {
        parent::__construct();
        $this->builder = $this->db->table('epaper');
    }

    public function buildQuery()
    {
        $this->builder->select('epaper.*');
    }
    //input values
    public function inputValues()
    {
        $data = [
            'userId' => inputPost('userId'),
            'number' => inputPost('number'),
            'description' => inputPost('description'),
            'type' => inputPost('type'),
        ];
        return $data;
    }

    public function getUserEpaperNumber($id)
    {
        $this->buildQuery();
        $res = $this->builder->where('userId', cleanNumber($id))->orderBy('number DESC')->get()->getRow();
        if ($res) {
            return $res->number + 1;
        } else {
            return 1;
        }
    }

    public function getEpaperByUserId($id){
        $this->buildQuery();
        return $this->builder->where('userId', cleanNumber($id))->get()->getResult();
    }

    public function getEpaper($id){
        $this->buildQuery();
        return $this->builder->where('id', cleanNumber($id))->get()->getRow();
    }

    //add epaper
    public function addEpaper()
    {
        $data = $this->inputValues();
        $data["number"] =  $this->getUserEpaperNumber($data["userId"]);
        if ($this->builder->insert($data)) {
            $lastId = $this->db->insertID();
            return true;
        }
        return false;
    }

     //delete epaper
     public function deleteEpaper($id)
     {
         $epaper = $this->getEpaper($id);
         if (!empty($epaper)) {
             return $this->builder->where('id', $epaper->id)->delete();
         }
         return false;
     }
}
