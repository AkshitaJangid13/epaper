<?php

namespace App\Models;

use CodeIgniter\Model;

class AdvertisementModel extends BaseModel
{
    protected $builder;

    public function __construct()
    {
        parent::__construct();
        $this->builder = $this->db->table('advertisement');
    }

    public function buildQuery()
    {
        $this->builder->select('advertisement.*');
    }
    //input values
    public function inputValues()
    {
        $data = [
            'image' => inputPost('image')
        ];
        return $data;
    }

    public function getAdvertisement($id)
    {
        $this->buildQuery();
        return $this->builder->where('id', cleanNumber($id))->get()->getRow();
    }
    //edit advertisement
    public function editAdvertisement($id)
    {
        $advertisement = $this->getAdvertisement($id);
        if (!empty($advertisement)) {
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
                    $this->builder->where('id', cleanNumber($id))->update($data);
                }
            }
            return true;
        }
        return false;
    }

    //get advertisement
    public function getAdvertisements()
    {
        $this->buildQuery();
        return $this->builder->get()->getResult();
    }
}
