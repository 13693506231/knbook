<?php
namespace App\Http\Controllers\View;
use App\Http\Controllers\Controller;
class MemberController extends Controller
{

    public function tologin($value=''){
        return view('login');
    }
    public function toregister($value=''){
        return view('register');
    }
}
