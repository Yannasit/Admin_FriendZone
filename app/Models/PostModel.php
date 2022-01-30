<?php

namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model{
    protected $table = 'post';
    protected $primaryKey = 'postId';
    protected $allowedFields = ['postId', 'postTitle', 'imagePost', 'detailpost', 'note', 'num_people', 'expenses', 'province', 'district', 'subDistrict', 'date_start', 'date_end', 'creation_date', 'userId', 'categoryId'];
}