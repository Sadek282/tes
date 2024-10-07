<?php

namespace App\Http\Controllers;

use App\Models\signloginModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SignLoginController extends Controller
{
    public function signup(Request $reqes){
        $data["name"] = $reqes->full_name;
        $data["email"] = $reqes->email;
        $data["password"] = $reqes->password;

        signloginModel::create($data);
        return  redirect()->route('login');
    }
    public function loginCheck(Request $reqes){

        if(Auth::attempt(['email'=> $reqes->email, 'password' => $reqes->password])){
            dd('aaa');
        }else{
            dd('bbbb');
        }
    }



 }
