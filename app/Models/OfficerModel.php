<?php

namespace App\Models;

use CodeIgniter\Model;

class OfficerModel extends Model{
    protected $table = 'officer';
    protected $primaryKey = 'offId';
    protected $allowedFields = ['offId', 'FName', 'LName', 'userName', 'password', 'gender', 'offImage', 'phoneNumber'];
}