<?php

namespace App\Models;

use CodeIgniter\Model;

class EpaperTemplateModel extends BaseModel
{
    protected $builder;

    public function __construct()
    {
        parent::__construct();

        $this->builder = $this->db->table('epaper_template_type');
    }

    //build sql query
    public function buildQuery($parentId = null)
    {
        $this->builder->select('epaper_template_type.*,IF( EXISTS(select * from epaper_template_type as f where f.parent_id=epaper_template_type.id), 1,0) as is_subcategory');
        if ($parentId) {
            $this->builder->where('epaper_template_type.parent_id', $parentId);
        } else {
            $this->builder->where('epaper_template_type.parent_id', null);
        }
    }

    //get post count
    public function getItems()
    {
        $this->buildQuery();
        return $this->builder->get()->getResult();
    }

    public function getSubItems($id){
        $this->buildQuery($id);
        return $this->builder->get()->getResult();
    }
}
