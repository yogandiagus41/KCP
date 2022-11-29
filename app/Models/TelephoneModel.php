<?php

namespace App\Models;

use CodeIgniter\Model;

class TelephoneModel extends Model
{
    protected $table = 'tb_telephone';
    protected $primaryKey = "ID_TELEPHONE";
    protected $allowedFields = ['ID_TELEPHONE', 'TELEPHONE_NUMBER', 'TELEPHONE_SUBJECT'];


    public function getAll($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['ID_TELEPHONE' => $id])->find();
    }

}