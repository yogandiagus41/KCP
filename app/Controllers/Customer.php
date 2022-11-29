<?php

namespace App\Controllers;

use App\Models\CustomerModel;
use App\Models\TelephoneModel;

class Customer extends BaseController
{
    public function index()
    {
        $Customer = new CustomerModel();
        $Get_all_customer = $Customer->getAll();
        $Last_id_customer_array = [];
        foreach ($Get_all_customer as $Data) {
            $Id_customer_array = explode("-", $Data['ID_CUSTOMER']);
            array_push($Last_id_customer_array, $Id_customer_array[2]);
        }
        if (count($Last_id_customer_array) == 0) {
            $New_id = "KCP-CTM-1";
        } else {
            $New_id = "KCP-CTM-" . max($Last_id_customer_array) + 1;
        }

        $Data = [
            'Url' => "Customer",
            'Get_data_customer' => $Get_all_customer,
            'Last_id_customer' => $New_id
        ];
        return view("Customer/Customer_index", $Data);
    }

    public function Create_data_customer(){
        // get Id
        $Customer = new CustomerModel();
        $Get_all_customer = $Customer->getAll();
        $Last_id_customer_array = [];
        foreach ($Get_all_customer as $Data) {
            $Id_customer_array = explode("-", $Data['ID_CUSTOMER']);
            array_push($Last_id_customer_array, $Id_customer_array[2]);
        }
        if (count($Last_id_customer_array) == 0) {
            $New_id = "KCP-CTM-1";
        } else {
            $New_id = "KCP-CTM-" . max($Last_id_customer_array) + 1;
        }
        // get code customer
         $Code_customer = $this->request->getVar('Code_customer');
        // get customer name
         $Customer_name = $this->request->getVar('Customer_name');
        // get address
        $Address = $this->request->getVar('Address');
        // get Tax ID Number
        $Tax_id_number = $this->request->getVar('Tax_id_number');
         // get City
         $City = $this->request->getVar('City');
         // get Post Code
         $Post_code = $this->request->getVar('Post_code');
         // get Country
         $Country = $this->request->getVar('Country');
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
        $db = \Config\Database::connect();
        $sql_customer = "insert into tb_customer values ('$New_id','$Code_customer','$Customer_name','$Tax_id_number','$Address','$City','$Post_code','$Country')";
        $db->query($sql_customer);

        $sql_telephone = "insert into tb_telephone values ('$New_id','$Phone_number','$Subject_phone_number')";
        $db->query($sql_telephone);
        session()->setFlashdata('add', '1 Field add to Customer Table!');
        return redirect()->to('/Customer');
    }

    public function Detail_data_customer($Id){
        $Customer = new CustomerModel();
        $Get_all_customer = $Customer->getAll($Id);
        $Telephone = new TelephoneModel();
        $No_telephone = $Telephone->getAll($Id);
        $Data=[
            'Url' => 'Customer / '. $Id,
            'Get_customer' => $Get_all_customer,
            'Get_telephone' => $No_telephone
        ];
      
        return view("Customer/Customer_detail", $Data);
    }

    public function Update_data_customer($Id){
          // get code customer
          $Code_customer = $this->request->getVar('Code_customer');
          // get customer name
           $Customer_name = $this->request->getVar('Customer_name');
          // get address
          $Address = $this->request->getVar('Address');
          // get Tax ID Number
          $Tax_id_number = $this->request->getVar('Tax_id_number');
           // get City
           $City = $this->request->getVar('City');
           // get Post Code
           $Post_code = $this->request->getVar('Post_code');
           // get Country
           $Country = $this->request->getVar('Country');
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
          $db = \Config\Database::connect();
          $sql_customer = "update tb_customer set CUSTOMER_NAME = '$Customer_name' where ID_CUSTOMER = '$Id'";
          $db->query($sql_customer);

          $sql_telephone = "update tb_telephone set TELEPHONE_NUMBER = '$Phone_number', TELEPHONE_SUBJECT='$Subject_phone_number' where ID_TELEPHONE = '$Id'";
          $db->query($sql_telephone);
          session()->setFlashdata('add', $Id . ' Succes Updated!');
          return redirect()->to('/Customer');
    }

    public function Delete_data_customer($Id){
        $Customer = new CustomerModel();
        $Customer->delete($Id);
        session()->setFlashdata('delete', '1 Field delete from Customer Table!');
        return redirect()->to('/Customer');
    }
}