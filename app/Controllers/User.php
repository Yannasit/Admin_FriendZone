<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController; // เรียกใช้API
use CodeIgniter\HTTP\RequestTrait; // เรียกใช้API


class User extends ResourceController // เปลี่ยนจาก Controller
{
    use RequestTrait; // เรียกใช้
    
    //Get all User
    public function viewUser()
    {
        $model = new UserModel();
        $data['user'] = $model->viewUser();
        if ( $data['user']) {
            return view('home', $data);
        }
         else{
             return view('home');
         }
        
    }

}
