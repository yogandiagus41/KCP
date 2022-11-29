<?php

namespace App\Models;

use CodeIgniter\Model;

class PerformerModel extends Model
{
    protected $table = 'tb_performer';
    protected $primaryKey = "ID_PERFORMER";
    protected $allowedFields = ['ID_PERFORMER', 'PERFORMER_ORIGINAL_NAME', 'PERFORMER_POPULAR_NAME', 'ADDRESS', 'PHOTO'];


    public function getAll($id = false)
    {
        if ($id == false) {
            return $this->findAll();
        }

        return $this->where(['ID_PERFORMER' => $id])->find();
    }
}