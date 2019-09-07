<?php
namespace App\Http\Controllers\Consoles;
use Illuminate\Http\Request;

class LoginController extends CommonController
{
    public function login(Request $request)
    {
    	if ($request->isMethod('post')) {
    		$code = new \Code;
			$getcode=$code->get();
			
			if(strtoupper($request->input('code'))!=$getcode){
				$putjson=[
					'msg'=>'验证码错误！',
					'code'=>'yzm'
				];
				echo json_encode($putjson);exit;
			}

			$putjson=[
					'msg'=>'登录成功！',
					'code'=>'dlcg'
			];
			echo json_encode($putjson);
    	}else{
    		return view('consoles.login');
    	}
    }
    //生成验证码
    public function code()
    {
    	$code = new \Code;
		$code->make();
    }
}
