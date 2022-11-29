<?php

namespace App\Controllers;

use App\Models\PerformerModel;

class Management extends BaseController
{
    public function index()
    {
        $Data = [
            'Url' => 'User Management'
        ];
        return view("User Management/User_management_index", $Data);
    }
}