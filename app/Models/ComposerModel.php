<?php

namespace App\Models;

use CodeIgniter\Model;

class ComposerModel extends Model
{
    protected $table = 'tb_composer';
    protected $primaryKey = "ID_COMPOSER";
    protected $allowedFields = ['ID_COMPOSER', 'COMPOSER_ORIGINAL_NAME', 'COMPOSER_POPULAR_NAME', 'GENDER', 'BIRTH_DATE', 'BIRTH_PLACE', 'ADDRESS', 'CITY', 'COUNTRY', 'POST_CODE', 'PHONE_NUMBER','SUBJECT_PHONE_NUMBER', 'MOBILE_NUMBER', 'SUBJECT_MOBILE_NUMBER','ADDRESS_CORRESPONDENCE', 'EMAIL', 'IDENTITY_NUMBER', 'TAX_ID_NUMBER', 'IPI_NUMBER', 'BANK_NAME', 'BANK_ACCOUNT_NAME', 'BANK_ACCOUNT_NUMBER', 'CITY_OF_BANK', 'BRANCH', 'CMO_NAME', 'ORIGINAL_PUBLISHING', 'SUB_PUBLISHING', 'PHOTO', 'STATUS'];


    public function getAll($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['ID_COMPOSER' => $id])->find();
    }
}