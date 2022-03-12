<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PostModel;
use CodeIgniter\RESTful\ResourceController; // เรียกใช้API
use CodeIgniter\HTTP\RequestTrait; // เรียกใช้API
use CodeIgniter\API\ResponseTrait; // เรียกใช้API

class PostController extends ResourceController // เปลี่ยนจาก Controller
{
    use RequestTrait; // เรียกใช้
    
    //Get all Post
    public function viewPost()
    {
        $model = new PostModel();
        $data = $model -> viewPost();
        //return view('view_post', $data);
        if ($data) {
          return $this->respond($data);  
        }
        
    }

    //Get Post ById
    public function getPostById($id = null)
    {
        $model = new PostModel();
        $id = 2 ;
        $data = $model-> getPostById($id);
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('ไม่มีโพสต์ประกาศกิจกรรมอยู่ในฐานข้อมูล');
        }
    }

}
