<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model{
    protected $table = 'users';
    protected $primaryKey = 'userId';
    protected $allowedFields = ['userId', 'FName', 'LName', 'userName', 'password', 'idCard', 'idCardImage', 'statusUser', 'gender', 'userImage', 'birthday', 'address', 'province', 'district', 'subDistrict', 'email', 'expIdCard', 'phoneNumber'];

    //แสดงข้อมูล User
    public function viewUser()
    {
        $data = $this->orderBy('userId', "ASC")->findAll();
        return $data;
    }

    //แสดงข้อมูล User ตาม userId
    public function viewUser2($id)
    {
        $data = $this->where('userId',$id)->findAll();
        return $data;
    }

    public function status()
    {
        $data['count'] = $this->where(["statusUser" => 0 ])->countAll();
        return $data;
    }

    //verify user
    public function verifyUser()
    {
        
    }

} 