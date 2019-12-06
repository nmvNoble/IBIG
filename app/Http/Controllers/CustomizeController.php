<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customize;

class CustomizesController extends Controller {
  public function index(){
    return view('index');
  }

  // Fetch records
  public function getUser($id=0){
    // Call getuserData() method of Page Model
    $userData['data'] = Customize::getuserData($id);

    echo json_encode($userData);
    exit;
  }


  // Update record
  public function updateUser(Request $request){

    //$name = $request->input('name');
    //$email = $request->input('email');
    $editid = $request->input('editid');
    $type = $request->input('type');
    $updateValue = $request->input('update');

    if($type =='1' ){
      $data = array("donateComputed"=>$updateValue);

      // Call updateData() method of Page Model
      Customize::updateData($editid, $data);
      echo 'Update successfully.';
    }else{
      echo 'err.';
    }

    exit; 
  }

}
