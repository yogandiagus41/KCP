<?php

namespace App\Models;

use CodeIgniter\Model;

class CustomerModel extends Model
{
    protected $table = 'tb_customer';
    protected $primaryKey = "ID_CUSTOMER";
    protected $allowedFields = ['ID_CUSTOMER', 'CODE_CUSTOMER', 'CUSTOMER_NAME', 'TAX_ID_CUSTOMER', 'ADDRESS', 'CITY', 'PROVINCE', 'POST_CODE', 'COUNTRY', 'PHONE_NUMBER', 'SUBJECT_PHONE_NUMBER'];


    public function getAll($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['ID_CUSTOMER' => $id])->find();
    }
}