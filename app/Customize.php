<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Customize extends Model {

   public static function getuserData($id=0){

     $value=DB::table('customizes')->where('id', $id)->first(); 
     return $value;

   }


   public static function updateData($id,$data){
      DB::table('users')->where('id', $id)->update($data);
   }

}