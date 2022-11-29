<?php

namespace App\Controllers;

use App\Models\ContractModel;
use App\Models\ComposerModel;

class Contract extends BaseController
{
    public function index()
    {
        $Contract = new ContractModel();
        $Get_all_contract = $Contract->getAll();
        $Last_id_contract_array = [];
        foreach ($Get_all_contract as $Data) {
            $Id_contract_array = explode("-", $Data['ID_CONTRACT']);
            array_push($Last_id_contract_array, $Id_contract_array[2]);
        }
        if (count($Last_id_contract_array) == 0) {
            $New_id = "KCP-CTR-1";
        } else {
            $New_id = "KCP-CTR-" . max($Last_id_contract_array) + 1;
        }

        $Composer_name = [];
        $Composer = new ComposerModel();
        $Get_all_composer = $Composer->getAll();
        foreach ($Get_all_composer as $Data) {
            array_push($Composer_name, $Data['COMPOSER_ORIGINAL_NAME']);
        }

        $Data = [
            'Url' => 'Contract',
            'Last_id_contract' => $New_id,
            'Composer_name' => $Get_all_composer
        ];
        return view("Contract/Contract_index", $Data);
    }

    public function Create_data_contract()
    {
        // get id
        $Contract = new ContractModel();
        $Get_all_contract = $Contract->getAll();
        $Last_id_contract_array = [];
        foreach ($Get_all_contract as $Data) {
            $Id_contract_array = explode("-", $Data['ID_CONTRACT']);
            array_push($Last_id_contract_array, $Id_contract_array[2]);
        }
        if (count($Last_id_contract_array) == 0) {
            $New_id = "KCP-CTR-1";
        } else {
            $New_id = "KCP-CTR-" . max($Last_id_contract_array) + 1;
        }
        //get contract number
        $Contract_number = $this->request->getVar('Contract_number');
        // get Composer Name
        $Composer = $this->request->getVar('Composer');
        // get Songs
        $Songs_temp = $this->request->getVar('Songs');
        if ($Songs_temp) {
            $Songs = implode(",", $Songs_temp);
        } else {
            $Songs = "null";
        }
        // get Percentage
        $Percentage = $this->request->getVar('Percentage');
        // get Date
        $Date = date('d-m-Y');
        // d($Contract_number);
        // d($Composer);
        // d($Songs);
        // d($Date);

        $db = \Config\Database::connect();
        $sql = "insert into tb_contract values ('$New_id','$Contract_number','$Composer','$Songs','$Percentage', '$Date')";
        $db->query($sql);
        session()->setFlashdata('add', '1 Field add to contract Table!');
        return redirect()->to('/Contract');
    }
}