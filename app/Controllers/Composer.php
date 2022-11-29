<?php

namespace App\Controllers;

use App\Models\ComposerModel;
use App\Models\PublishingModel;
use App\Models\TelephoneModel;

class Composer extends BaseController
{
    public function index()
    {
        // get all data composer
        $Composer = new ComposerModel();
        $Get_all_composer = $Composer->getAll();
        $Last_id_composer_array = [];
        foreach ($Get_all_composer as $Data) {
            $Id_composer_array = explode("-", $Data['ID_COMPOSER']);
            array_push($Last_id_composer_array, $Id_composer_array[2]);
        }
        if (count($Last_id_composer_array) == 0) {
            $New_id = "KCP-CPS-1";
        } else {
            $New_id = "KCP-CPS-" . max($Last_id_composer_array) + 1;
        }

        // $Content = file_get_contents("https://yogandiagus41.github.io/api-wilayah-indonesia/api/provinces.json");
        // $Result = json_decode($Content);
        // $List_province_temp = [];
        // foreach ($Result as $Data => $D) {
        //     foreach ($D as $E) {
        //         array_push($List_province_temp, $E);
        //     }
        // }
        // $List_province_id = [];
        // $List_province = [];
        // for ($i = 0; $i < count($List_province_temp); $i++) {
        //     if ($i % 2 != 0) {
        //         array_push($List_province, $List_province_temp[$i]);
        //     } else {
        //         array_push($List_province_id, $List_province_temp[$i]);
        //     }
        // }

        // $List_regencies_temp = [];
        // for ($i = 0; $i < count($List_province_id); $i++) {
        // $Content_regencies = file_get_contents("https://yogandiagus41.github.io/api-wilayah-indonesia/api/regencies/" . $List_province_id[$i] . ".json");
        // $Content_regencies = file_get_contents("https://yogandiagus41.github.io/api-wilayah-indonesia/api/regencies/11.json");
        // $Result_regencies = json_decode($Content_regencies);

        // foreach ($Result_regencies as $Data => $D) {
        //     foreach ($D as $E) {
        //         array_push($List_regencies_temp, $E);
        //     }
        // }
        // // }
        // $List_regencies = [];
        // for ($i = 0; $i < count($List_regencies_temp); $i++) {
        //     if (strlen($List_regencies_temp[$i]) > 4) {
        //         array_push($List_regencies, $List_regencies_temp[$i]);
        //     }
        // }


        $Publishing = new PublishingModel();
        $Get_all_publishing = $Publishing->getAll();

        $Data = [
            'Url' => "Composer",
            'Get_data_composer' => $Get_all_composer,
            'Last_id_composer' => $New_id,
            'Get_data_publishing' => $Get_all_publishing
            // 'List_regencies' => $List_regencies
        ];
        return view("Composer/Composer_index.php", $Data);
    }

    public function Create_data_composer()
    {

        // get original name
        $Composer_original_name = $this->request->getVar('Composer_original_name');
        // get popular name 
        $Composer_popular_name_temp = $this->request->getVar('Composer_popular_name');
        if ($Composer_popular_name_temp) {
            $Composer_popular_name = implode(",", $Composer_popular_name_temp);
        } else {
            $Composer_popular_name = null;
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
            $Subject_phone_number = null;
        }
        // get mobile number
        $Mobile_number_temp = $this->request->getVar('Mobile_number');
        if ($Mobile_number_temp) {
            $Mobile_number = implode(",", $Mobile_number_temp);
        } else {
            $Mobile_number = 0;
        }
        // get subject mobile number
        $Subject_mobile_number_temp = $this->request->getVar('Subject_mobile_number');
        if ($Subject_mobile_number_temp) {
            $Subject_mobile_number = implode(",", $Subject_mobile_number_temp);
        } else {
            $Subject_mobile_number = null;
        }
        // email
        $Email = null;
        // get Gender
        $Gender = null;
        // get Birth Date
        $Birth_date = null;
        // get Birth Place
        $Birth_place = null;
        // get address
        $Address = null;
        // get City
        $City = null;
        // get Country
        $Country = null;
        // get Post Code
        $Post_code = null;
        // get identity number
        $Identity_number = null;
        // get Tax ID Number
        $Tax_id_number = null;
        // get IPI Number
        $IPI_number = null;
        // get Address Correspondence
        $Address_correspondence = null;
        // get Bank Name
        $Bank_name = null;
        // get Bank Account Name
        $Bank_account_name = null;
        // get Bank Account Number
        $Bank_account_number = null;
        // get city of bank
        $City_of_bank = null;
        // get branch
        $Branch = null;
        // get CMO Name
        $CMO_name = null;
        // get Original Publishing
        $Original_publishing = null;
        // get sub publishing
        $Sub_publishing = null;
        // get Photo
        $Photo = null;
      
        // get status
        $Status = null;

        // get ID 
        $Composer = new ComposerModel();
        $Get_all_composer = $Composer->getAll();
        $Last_id_composer_array = [];
        foreach ($Get_all_composer as $Data) {
            $Id_composer_array = explode("-", $Data['ID_COMPOSER']);
            array_push($Last_id_composer_array, $Id_composer_array[2]);
        }
        if (count($Last_id_composer_array) == 0) {
            $New_id = "KCP-CPS-1";
        } else {
            $New_id = "KCP-CPS-" . max($Last_id_composer_array) + 1;
        }


        // d($Phone_number);
        // insert to database
        $db = \Config\Database::connect();
        $sql_composer = "insert into tb_composer values ('$New_id','$Composer_original_name','$Composer_popular_name','$Gender', '$Birth_date','$Birth_place','$Address','$City', '$Country', '$Post_code', '$Address_correspondence','$Email','$Identity_number', '$Tax_id_number', '$IPI_number','$Bank_name','$Bank_account_name', '$Bank_account_number', '$City_of_bank','$Branch','$CMO_name','$Original_publishing','$Sub_publishing','$Photo','$Status')";
        $db->query($sql_composer);

        $sql_telephone = "insert into tb_telephone values ('$New_id','$Phone_number','$Subject_phone_number')";
        $db->query($sql_telephone);
        session()->setFlashdata('add', '1 Field add to Composer Table!');
        return redirect()->to('/Composer/Detail/'. $New_id);
    }

    public function Detail_data_composer($Id)
    {
        $Composer = new ComposerModel();
        $Publishing = new PublishingModel();
        $Get_composer = $Composer->getAll($Id);
        $Id_publishing = 0;
        $Id_sub_publishing = 0;
        $Get_publishing = $Publishing->getAll($Id_publishing);
        $Get_sub_publishing = $Publishing->getAll($Id_sub_publishing);
        $Get_publishing_name = 0;
        $Get_sub_publishing_name = 0;
        $Composer_popular_name = [];
        foreach ($Get_composer as $Data) {
            array_push($Composer_popular_name, explode(",", $Data['COMPOSER_POPULAR_NAME']));
            $Id_publishing = $Data['ORIGINAL_PUBLISHING'];
            $Id_sub_publishing = $Data['SUB_PUBLISHING'];
        }
        foreach ($Get_publishing as $Data) {
            $Get_publishing_name = $Data['PUBLISHING_ORIGINAL_NAME'];
        }
        foreach ($Get_sub_publishing as $Data) {
            $Get_sub_publishing_name = $Data['PUBLISHING_ORIGINAL_NAME'];
        }

        $Telephone = new TelephoneModel();
        $Telephone_data = $Telephone->getAll($Id);

        
        $Data = [
            'Url' => "Composer / " . $Id,
            'Get_composer' => $Get_composer,
            'Composer_popular_name' => $Composer_popular_name,
            'Publishing_name' => $Get_publishing_name,
            'Sub_publishing_name' => $Get_sub_publishing_name,
            'Get_telephone' => $Telephone_data
        ];



        return view("Composer/Composer_detail.php", $Data);
    }

    public function Update_data_composer($id)
    {
        // get photo
        $Photo = $this->request->getFile('Photo');
        $Photo_compare = $this->request->getVar('Photo_compare');

        $New_Photo = 0;

        if ($Photo->getName()) {
            $Photo->move('Photo');
            $New_Photo = $Photo->getName();
        } else {
            $New_Photo = $Photo_compare;
        }

        // get original name
        $Composer_original_name = $this->request->getVar('Composer_original_name');
        // get popular name 
        $Composer_popular_name_temp = $this->request->getVar('Composer_popular_name');
        if ($Composer_popular_name_temp) {
            $Composer_popular_name = implode(",", $Composer_popular_name_temp);
        } else {
            $Composer_popular_name = "null";
        }
        // get email
        $Email = $this->request->getVar('Email');
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
        // get Gender
        $Gender = $this->request->getVar('Gender');
        // get Birth Date
        $Birth_date = $this->request->getVar('Birth_date');
        // get Birth Place
        $Birth_place = $this->request->getVar('Birth_place');
        // get address
        $Address = $this->request->getVar('Address');
        // get City
        $City = $this->request->getVar('City');
        // get Country
        $Country = $this->request->getVar('Country');
        // get Post Code
        $Post_code = $this->request->getVar('Post_code');
        // get identity number
        $Identity_number = $this->request->getVar('Identity_number');
        // get Tax ID Number
        $Tax_id_number = $this->request->getVar('Tax_id_number');
        // get IPI Number
        $IPI_number = $this->request->getVar('IPI_number');
        // get Address Correspondence
        $Address_correspondence = $this->request->getVar('Address_correspondence');
        // get Bank Name
        $Bank_name = $this->request->getVar('Bank_name');
        // get Bank Account Name
        $Bank_account_name = $this->request->getVar('Bank_account_name');
        // get Bank Account Number
        $Bank_account_number = $this->request->getVar('Bank_account_number');
        // get city of bank
        $City_of_bank = $this->request->getVar('City_of_bank');
        // get branch
        $Branch = $this->request->getVar('Branch');
        // get CMO Name
        $CMO_name = $this->request->getVar('CMO_name');
        // get Original Publishing
        $Original_publishing = $this->request->getVar('Original_publishing');
        // get sub publishing
        $Sub_publishing = $this->request->getVar('Sub_publishing');
        // get status
        $Status = $this->request->getVar('Status');


        $db = \Config\Database::connect();
        $sql_composer = "Update tb_composer set COMPOSER_ORIGINAL_NAME = '$Composer_original_name', COMPOSER_POPULAR_NAME = '$Composer_popular_name', IPI_NUMBER ='$IPI_number',PHOTO = '$New_Photo' where ID_COMPOSER = '$id' ";
        $db->query($sql_composer);

        $sql_telephone = "update tb_telephone set TELEPHONE_NUMBER = '$Phone_number', TELEPHONE_SUBJECT='$Subject_phone_number' where ID_TELEPHONE = '$id'";
        $db->query($sql_telephone);
        session()->setFlashdata('add', $id . ' Succes Updated!');
        return redirect()->to('/Composer/Detail/'.$id);
    }

    public function Delete_data_composer($Id)
    {
        $Composer = new ComposerModel();
        $Composer->delete($Id);
        session()->setFlashdata('delete', '1 Field delete from Composer Table!');
        return redirect()->to('/Composer');
    }
}