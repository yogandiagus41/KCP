<?php

namespace App\Controllers;

use App\Models\PerformerModel;

class Performer extends BaseController
{
    public function index()
    {
        $Performer = new PerformerModel();
        $Get_all_performer = $Performer->getAll();
        $Last_id_performer_array = [];
        foreach ($Get_all_performer as $Data) {
            $Id_performer_array = explode("-", $Data['ID_PERFORMER']);
            array_push($Last_id_performer_array, $Id_performer_array[2]);
        }
        if (count($Last_id_performer_array) == 0) {
            $New_id = "KCP-PFM-1";
        } else {
            $New_id = "KCP-PFM-" . max($Last_id_performer_array) + 1;
        }

        $Data = [
            'Url' => "Performer",
            'Get_data_performer' => $Get_all_performer,
            'Last_id_performer' => $New_id
        ];
        return view("Performer/Performer_index", $Data);
    }

    public function Create_data_performer()
    {
        // get Original Name
        $Performer_original_name = $this->request->getVar('Performer_original_name');
        // get popular name 
        $Performer_popular_name_temp = $this->request->getVar('Performer_popular_name');
        if ($Performer_popular_name_temp) {
            $Performer_popular_name = implode(",", $Performer_popular_name_temp);
        } else {
            $Performer_popular_name = "null";
        }
        // get address
        $Address = $this->request->getVar('Address');
        // get Photo
        $Photo = $this->request->getFile('Photo');
        $Photo->move('Photo');
        $Photo_name = $Photo->getName();
        // get ID
        $Performer = new PerformerModel();
        $Get_all_performer = $Performer->getAll();
        $Last_id_performer_array = [];
        foreach ($Get_all_performer as $Data) {
            $Id_performer_array = explode("-", $Data['ID_PERFORMER']);
            array_push($Last_id_performer_array, $Id_performer_array[2]);
        }
        if (count($Last_id_performer_array) == 0) {
            $New_id = "KCP-PFM-1";
        } else {
            $New_id = "KCP-PFM-" . max($Last_id_performer_array) + 1;
        }

        $db = \Config\Database::connect();
        $sql = "insert into tb_performer values ('$New_id','$Performer_original_name','$Performer_popular_name','$Address','$Photo_name')";
        $db->query($sql);
        session()->setFlashdata('add', '1 Field add to Performer Table!');
        return redirect()->to('/Performer');
    }

    public function Detail_data_performer($Id)
    {
        $Performer = new PerformerModel();
        $Get_all_performer = $Performer->getAll($Id);
        $Performer_popular_name = [];
        foreach ($Get_all_performer as $Data) {
            array_push($Performer_popular_name, explode(",", $Data['PERFORMER_POPULAR_NAME']));
        }

        $Data = [
            'Url' => "Performer / " . $Id,
            'Get_performer' => $Get_all_performer,
            'Performer_popular_name' => $Performer_popular_name
        ];
        return view("Performer/Performer_detail.php", $Data);
    }

    public function Update_data_performer($Id)
    {
        $Performer_original_name = $this->request->getVar('Performer_original_name');
        // get popular name 
        $Performer_popular_name_temp = $this->request->getVar('Performer_popular_name');
        if ($Performer_popular_name_temp) {
            $Performer_popular_name = implode(",", $Performer_popular_name_temp);
        } else {
            $Performer_popular_name = "null";
        }
        // get address
        $Address = $this->request->getVar('Address');
        $Photo = $this->request->getFile('Photo');
        $Photo_compare = $this->request->getVar('Photo_compare');

        $New_Photo = 0;

        if ($Photo->getName()) {
            $Photo->move('Photo');
            $New_Photo = $Photo->getName();
        } else {
            $New_Photo = $Photo_compare;
        }

        $db = \Config\Database::connect();
        $sql = "update tb_performer set PERFORMER_ORIGINAL_NAME = '$Performer_original_name', PERFORMER_POPULAR_NAME='$Performer_popular_name', PHOTO='$New_Photo' where ID_PERFORMER = '$Id'";
        $db->query($sql);
        session()->setFlashdata('add', $Id . ' Succes Updated!');
        return redirect()->to('/Performer');
    }

    public function Delete_data_performer($Id)
    {
        $Performer = new PerformerModel();
        $Performer->delete($Id);
        session()->setFlashdata('delete', '1 Field delete from Performer Table!');
        return redirect()->to('/Performer');
    }
}