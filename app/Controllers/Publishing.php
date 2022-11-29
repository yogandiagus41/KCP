<?php

namespace App\Controllers;

use App\Models\PublishingModel;
use App\Models\TelephoneModel;
use CodeIgniter\Commands\Utilities\Publish;

class Publishing extends BaseController
{
    public function index()
    {
        $Publishing = new PublishingModel();
        $Get_all_publishing = $Publishing->getAll();
        $Last_id_publishing_array = [];
        foreach ($Get_all_publishing as $Data) {
            $Id_publishing_array = explode("-", $Data['ID_PUBLISHING']);
            array_push($Last_id_publishing_array, $Id_publishing_array[2]);
        }
        if (count($Last_id_publishing_array) == 0) {
            $New_id = "KCP-PLS-1";
        } else {
            $New_id = "KCP-PLS-" . max($Last_id_publishing_array) + 1;
        }

        $Data = [
            'Url' => "Publishing",
            'Get_data_publishing' => $Get_all_publishing,
            'Last_id_publishing' => $New_id
        ];
        return view("publishing/publishing_index.php", $Data);
    }

    public function Create_data_publishing()
    {
        // get original name
        $Publishing_original_name = $this->request->getVar('Publishing_original_name');
        // get popular name
        $Publishing_alias_name_temp = $this->request->getVar('Publishing_alias_name');
        if ($Publishing_alias_name_temp) {
            $Publishing_alias_name = implode(",", $Publishing_alias_name_temp);
        } else {
            $Publishing_alias_name = "null";
        }

        // get phone number
        $Phone_number_temp = $this->request->getVar('Phone_number');
        if ($Phone_number_temp) {
            $Phone_number = implode((","), $Phone_number_temp);
        } else {
            $Phone_number = 0;
        }
        // get subject phone number
        $Subject_phone_number_temp = $this->request->getVar('Subject_phone_number');
        if ($Subject_phone_number_temp) {
            $Subject_phone_number = implode((","), $Subject_phone_number_temp);
        } else {
            $Subject_phone_number = "null";
        }
        // get address
        $Address = $this->request->getVar('Address');
        // get City
        $City = $this->request->getVar('City');
        // get Post Code
        $Post_code = $this->request->getVar('Post_code');
        // get Country
        $Country = $this->request->getVar('Country');

        // get SIUP Number
        $SIUP_number = $this->request->getVar('SIUP_number');
        // get Tax ID Number
        $Tax_id_number = $this->request->getVar('Tax_id_number');
        // get Bank Name
        $Bank_name = $this->request->getVar('Bank_name');
        // get Bank Account Name
        $Bank_account_name = $this->request->getVar('Bank_account_name');
        // get Bank Account Number
        $Bank_account_number = $this->request->getVar('Bank_account_number');
        // get Bank Address
        $Bank_address = $this->request->getVar('Bank_address');
        // get branch
        $Branch = $this->request->getVar('Branch');
        // get Swift Code 
        $Swift_code = $this->request->getVar('Swift_code');
        // get mech share
        $Mech_Share = $this->request->getVar('Mech_share');
        // get Sync Share
        $Sync_share = $this->request->getVar('Sync_share');
        // get Lyric share
        $Lyric_share = $this->request->getVar('Lyric_share');
        // get Performance share
        $Performance_share = $this->request->getVar('Performance_share');
        // get Territory
        $Territory = $this->request->getVar('Territory');
        // get IP Base
        $Ip_base = $this->request->getVar('Ip_base');
        // get Ip Name
        $Ip_name = $this->request->getVar('Ip_name');
        // get id
        $Publishing = new PublishingModel();
        $Get_all_publishing = $Publishing->getAll();
        $Last_id_publishing_array = [];
        foreach ($Get_all_publishing as $Data) {
            $Id_publishing_array = explode("-", $Data['ID_PUBLISHING']);
            array_push($Last_id_publishing_array, $Id_publishing_array[2]);
        }
        if (count($Last_id_publishing_array) == 0) {
            $New_id = "KCP-PLS-1";
        } else {
            $New_id = "KCP-PLS-" . max($Last_id_publishing_array) + 1;
        }
        // insert to database
        $db = \Config\Database::connect();
        $sql_publishing = "insert into tb_publishing values ('$New_id','$Publishing_original_name', '$Publishing_alias_name', '$Address', '$City', '$Post_code', '$Country','$SIUP_number', '$Tax_id_number','$Bank_name', '$Bank_account_name', '$Bank_account_number','$Bank_address','$Branch','$Swift_code','$Mech_Share','$Sync_share','$Lyric_share','$Performance_share','$Territory','$Ip_base','$Ip_name')";
        $db->query($sql_publishing);

        $sql_telephone = "insert into tb_telephone values ('$New_id','$Phone_number','$Subject_phone_number')";
        $db->query($sql_telephone);
        

        session()->setFlashdata('add', '1 Field add to Publishing Table!');
        return redirect()->to('/Publishing');
    }

    public function Detail_data_publishing($Id)
    {
        $Publishing = new PublishingModel();
        $Get_publishing = $Publishing->getAll($Id);
        $Publishing_alias_name = [];
        foreach ($Get_publishing as $Data) {
            array_push($Publishing_alias_name, explode(",", $Data['PUBLISHING_ALIAS_NAME']));
        }
        $Telephone = new TelephoneModel();
        $No_telephone = $Telephone->getAll($Id);
   


        $Data = [
            'Url' => "Publishing / " . $Id,
            'Get_publishing' => $Get_publishing,
            'Publishing_alias_name' => $Publishing_alias_name,
            'Get_telephone' => $No_telephone
        ];
        return view("Publishing/Publishing_detail", $Data);
    }

    public function Update_data_publishing($Id)
    {
        // get original name
        $Publishing_original_name = $this->request->getVar('Publishing_original_name');
        // get popular name
        $Publishing_alias_name_temp = $this->request->getVar('Publishing_alias_name');
        if ($Publishing_alias_name_temp) {
            $Publishing_alias_name = implode(",", $Publishing_alias_name_temp);
        } else {
            $Publishing_alias_name = "null";
        }

        // get phone number
        $Phone_number_temp = $this->request->getVar('Phone_number');
        if ($Phone_number_temp) {
            $Phone_number = implode((","), $Phone_number_temp);
        } else {
            $Phone_number = 0;
        }
        // get subject phone number
        $Subject_phone_number_temp = $this->request->getVar('Subject_phone_number');
        if ($Subject_phone_number_temp) {
            $Subject_phone_number = implode((","), $Subject_phone_number_temp);
        } else {
            $Subject_phone_number = "null";
        }
        // get address
        $Address = $this->request->getVar('Address');
        // get City
        $City = $this->request->getVar('City');
        // get Post Code
        $Post_code = $this->request->getVar('Post_code');
        // get Country
        $Country = $this->request->getVar('Country');

        // get SIUP Number
        $SIUP_number = $this->request->getVar('SIUP_number');
        // get Tax ID Number
        $Tax_id_number = $this->request->getVar('Tax_id_number');
        // get Bank Name
        $Bank_name = $this->request->getVar('Bank_name');
        // get Bank Account Name
        $Bank_account_name = $this->request->getVar('Bank_account_name');
        // get Bank Account Number
        $Bank_account_number = $this->request->getVar('Bank_account_number');
        // get Bank Address
        $Bank_address = $this->request->getVar('Bank_address');
        // get branch
        $Branch = $this->request->getVar('Branch');
        // get Swift Code 
        $Swift_code = $this->request->getVar('Swift_code');
        // get mech share
        $Mech_Share = $this->request->getVar('Mech_share');
        // get Sync Share
        $Sync_share = $this->request->getVar('Sync_share');
        // get Lyric share
        $Lyric_share = $this->request->getVar('Lyric_share');
        // get Performance share
        $Performance_share = $this->request->getVar('Performance_share');
        // get Territory
        $Territory = $this->request->getVar('Territory');
        // get IP Base
        $Ip_base = $this->request->getVar('Ip_base');
        // get Ip Name
        $Ip_name = $this->request->getVar('Ip_name');

        // insert to database
        $db = \Config\Database::connect();
        $sql_publishing = "update tb_publishing set PUBLISHING_ORIGINAL_NAME ='$Publishing_original_name' , PUBLISHING_ALIAS_NAME = '$Publishing_alias_name' where ID_PUBLISHING = '$Id'";
        $db->query($sql_publishing);

        $sql_telephone = "update tb_telephone set TELEPHONE_NUMBER = '$Phone_number', TELEPHONE_SUBJECT='$Subject_phone_number' where ID_TELEPHONE = '$Id'";
        $db->query($sql_telephone);
        session()->setFlashdata('add', $Id . ' Succes Updated!');
        return redirect()->to('/Publishing');
    }

    public function Delete_data_publishing($Id)
    {
        $Composer = new PublishingModel();
        $Telephone = new TelephoneModel();
        $Composer->delete($Id);
        $Telephone->delete($Id);
        session()->setFlashdata('delete', '1 Field delete from Publishing Table!');
        return redirect()->to('/Publishing');
    }
}