<?php

namespace App\Models;

use CodeIgniter\Model;

class ContractModel extends Model
{
    protected $table = 'tb_contract';
    protected $primaryKey = "ID_CONTRACT";
    protected $allowedFields = ['ID_CONTRACT', 'CONTRUCT_NUMBER', 'COMPOSER', 'SONGS', 'PERCENTAGE', 'CREATED_AT'];


    public function getAll($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['ID_CONTRACT' => $id])->find();
    }
}