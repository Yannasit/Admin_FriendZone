<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\UserModel;
use CodeIgniter\RESTful\ResourceController; // เรียกใช้API
use CodeIgniter\HTTP\RequestTrait; // เรียกใช้API


class UserController extends ResourceController // เปลี่ยนจาก Controller
{
    use RequestTrait; // เรียกใช้

    //Get all User by userId
    public function viewUser2($id)
    {
        $model = new UserModel();
        $data['user'] = $model->viewUser2($id);
        if ( $data['user']) {
            return view('dataUser', $data);
        }
         else{
             return view('dataUser');
         }
    }
    
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

    //verify user
    public function verifyUser()
    {
        
    }

}
