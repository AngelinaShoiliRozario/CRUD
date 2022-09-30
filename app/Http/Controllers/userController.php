<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
   
    public function user(){
        return view('user');
     }

     public function postuser(Request $r){
        
        $r->validate(['name'=>'required', 'email'=>'required| email', 'password'=>'required']);
        $name =  $r->name;
        $email = $r->email;
        $pass = $r->password;
        return $r->input();
         
     }

     public function billu(){
               $arr= ['name'=>'mimi', 'address'=>'Gazipur', 'id'=>100];
                
               return view('billu',['a'=>$arr]);
     }


     public function cat(){
       
      return view('cat');
}
  
}
