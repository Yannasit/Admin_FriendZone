<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\PostModel;
use CodeIgniter\RESTful\ResourceController; // เรียกใช้API
use CodeIgniter\HTTP\RequestTrait; // เรียกใช้API
use CodeIgniter\API\ResponseTrait; // เรียกใช้API

class Post extends ResourceController // เปลี่ยนจาก Controller
{
    use RequestTrait; // เรียกใช้
    //Get all Post
    public function viewPost()
    {
        $model = new PostModel();
        $data['post'] = $model->orderBy('postId', "DESC")->findAll();
        //return view('view_post', $data);
        return $this->respond($data['post']);
    }
}
