<?php
/**
 * ValidateCodeController.php
 * User: nankangkang
 * Date: 2018/7/12
 * Time: 16:43
 */
namespace App\Http\Controllers\Service;
use App\Http\Controllers\Controller;
use App\Tool\Validate\ValidateCode;

class ValidateCodeController extends Controller{
    /**
     * @description 
     * @param
     * @author nankangkang
     * @date 2018/7/12 16:45
     */  
    public function create($value = ''){
        $validate = new ValidateCode;
        return $validate->doimg();
    }
}