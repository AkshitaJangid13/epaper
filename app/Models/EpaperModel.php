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
            'page1' => inputPost('page1'),
            'page2' => inputPost('page2'),
            'page3' => inputPost('page3'),
            'page4' => inputPost('page4'),
            'page5' => inputPost('page5'),
            'page6' => inputPost('page6'),
            'page7' => inputPost('page7'),
            'page8' => inputPost('page8'),
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

    public function getEpaperByUserId($id)
    {
        $this->buildQuery();
        return $this->builder->where('userId', cleanNumber($id))->get()->getResult();
    }

    public function getEpaper($id)
    {
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

    public function updloadImage()
    {

        $uploadModel = new UploadModel();
        if (isset($_FILES['files']['name'])) {
            $tmpFilePath = $_FILES['files']['tmp_name'];
            if (isset($tmpFilePath)) {
                $ext = $uploadModel->getFileExtension($_FILES['files']['name']);
                $newName = 'temp_' . generateToken() . '.' . $ext;
                $newPath = FCPATH . "uploads/tmp/" . $newName;
                if (move_uploaded_file($tmpFilePath, FCPATH . "uploads/tmp/" . $newName)) {
                    if ($ext == 'gif') {
                        $gifPath = $uploadModel->uploadGIF($newName, 'gallery');
                        $data["image"] = $gifPath;
                    } else {
                        $data["image"] = $uploadModel->uploadGalleryImage($newPath, 1920);
                    }
                }
                $data["storage"] = $this->generalSettings->storage;
                $uploadModel->deleteTempFile($newPath);
                //move to s3
                if ($data['storage'] == 'aws_s3') {
                    $awsModel = new AwsModel();
                    if (!empty($data['image'])) {
                        $awsModel->uploadFile($data['image']);
                    }
                }
                return $data;
            }
        }
        return false;
    }
}
