<?php

namespace App\Models;

use CodeIgniter\Model;

class PublishingModel extends Model
{
    protected $table = 'tb_publishing';
    protected $primaryKey = "ID_PUBLISHING";
    protected $allowedFields = ['ID_PUBLISHING', 'PUBLISHING_ORIGINAL_NAME', 'PUBLISHING_ALIAS_NAME', 'ADDRESS', 'CITY', 'POST_CODE', 'COUNTRY','SIUP_NUMBER', 'TAX_ID_NUMBER', 'BANK_NAME', 'BANK_ACCOUNT_NAME', 'BANK_ACCOUNT_NUMBER', 'BANK_ADDRESS', 'BRANCH', 'SWIFT_CODE', 'MECH_SHARE', 'SYNC_SHARE', 'LYRIC_SHARE', 'PERFORMANCE_SHARE', 'TERRITORY', 'IP_BASE', 'IP_NAME'];


    public function getAll($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }
        return $this->where(['ID_PUBLISHING' => $id])->find();
    }
}