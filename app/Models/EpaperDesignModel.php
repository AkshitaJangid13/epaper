<?php

namespace App\Models;

use CodeIgniter\Model;

class EpaperDesignModel extends BaseModel
{
    protected $builder;

    public function __construct()
    {
        parent::__construct();

        $this->builder = $this->db->table('epaper_design');
    }

    //build sql query
    public function buildQuery($id)
    {
        $this->builder->select('epaper_design.*')->where('epaper_design.type_id', $id);
    }

    //get post count
    public function getDesign($id)
    {
        $this->buildQuery($id);
        return $this->builder->get()->getResult();
    }

    public function getDesignById($id){
       return  $this->builder->select('epaper_design.*')->where('epaper_design.id', $id)->get()->getRow();

    }

}
