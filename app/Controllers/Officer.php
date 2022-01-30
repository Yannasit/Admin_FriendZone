<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\OfficerModel;
use CodeIgniter\RESTful\ResourceController; // เรียกใช้API
use CodeIgniter\HTTP\RequestTrait; // เรียกใช้API
use CodeIgniter\API\ResponseTrait; // เรียกใช้API

class Officer extends ResourceController // เปลี่ยนจาก Controller
{
    use RequestTrait; // เรียกใช้

    //Method Get 
    //Get all Officer
    public function viewOfficer()
    {
        $model = new OfficerModel();
        $data['officer'] = $model->orderBy('offId', "DESC")->findAll();
        return $this->respond($data['officer']);
    }

    //Get officer ById
    public function getOfficerById($id = null)
    {
        $model = new OfficerModel();
        $data = $model->where('offId', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No officer found');
        }
    }

    //Method Post
    public function addOfficer()
    {
        $model = new OfficerModel();
        $data = [
            'offId' => $this->request->getVar('offId'),
            'FName' => $this->request->getVar('FName'),
            'LName' => $this->request->getVar('LName'),
            'userName' => $this->request->getVar('userName'),
            'password' => $this->request->getVar('password'),
            'gender' => $this->request->getVar('gender'),
            'offImage' => $this->request->getVar('offImage'),
            'phoneNumber' => $this->request->getVar('phoneNumber'),
        ];
        $model->insert($data);
        $myRespond = [
            "status" => 201,
            "error" => null,
            "message" => "Add Officer successfully"
        ];
        return $this->respond($myRespond);
    }

    //Method Delete
    public function deleteOfficer($id = null)
    {
        $model = new OfficerModel();
        $check = $model->where('offId', $id)->first();
        if ($check) {
            $model->where('offId', $id)->delete();
            $myRespond = [
                "status" => 201,
                "error" => null,
                "message" => "Delete Officer successfully"
            ];
            return $this->respond($myRespond);
        } else {
            return $this->failNotFound("No officer found");
        }
    }
}
