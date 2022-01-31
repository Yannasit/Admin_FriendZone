<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\CategoryModel;
use CodeIgniter\RESTful\ResourceController; // เรียกใช้API
use CodeIgniter\HTTP\RequestTrait; // เรียกใช้API
use CodeIgniter\API\ResponseTrait; // เรียกใช้API

class Category extends ResourceController // เปลี่ยนจาก Controller
{
    use RequestTrait; // เรียกใช้
    
    //Method Get 
    //Get all category
    public function viewCategory()
    {
        $model = new CategoryModel();
        $data['category'] = $model->orderBy('categoryId', "ASC")->findAll();
        return $this->respond($data['category']);
    }

    //Method Post
    public function addCategory()
    {
        $model = new CategoryModel();
        $data = [
            'categoryId ' => $this->request->getVar('categoryId'),
            'name_category' => $this->request->getVar('name_category'),
        ];
        $model->insert($data);
        $myRespond = [
            "status" => 201,
            "error" => null,
            "message" => "Add Category successfully"
        ];
        return $this->respond($myRespond);
    }

     //Method Delete
     public function deleteCategory($id = null)
     {
         $model = new CategoryModel();
         $check = $model->where('categoryId', $id)->first();
         if ($check) {
             $model->where('categoryId', $id)->delete();
             $myRespond = [
                 "status" => 201,
                 "error" => null,
                 "message" => "Delete Category successfully"
             ];
             return $this->respond($myRespond);
         } else {
             return $this->failNotFound("No category found");
         }
     }

}

?>