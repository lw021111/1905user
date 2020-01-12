<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\CommonModel;
class TestController extends Controller{
	function reg(){
		$reg_info = [
			'user_name' => 'liuwei1',
			'user_email' => 'liuwei1@qq.com',
			'pass1' => '11111',
			'pass2' => '11111',
		];

		//请求admin 注册接口
		$url="http://admin.com/reg";
		$response=CommonModel::curlPost($url,$reg_info);
		echo '<pre>';print_r($response);echo '</pre>';
	}
	function login(){
		$login_info = [
			'user_name'=>'liuwei1',
			'user_pwd' =>'11111',
		];

		//请求admin 登陆接口
		$url='http://admin.com/login';
		$response=CommonModel::curlPost($url,$login_info);
		echo '<pre>';print_r($response);echo '</pre>';
	}    
   
	function getData(){
		$token='9607d89acef20d2419ef';
		$user_id=10;
		//请求admin 获取数据接口
		$url='http://admin.com/time';
		$header = [
			'token:'.$token,
			'uid:'.$user_id
		];
		$response=CommonModel::curlGet($url,$header);
		echo '<pre>';print_r($response);echo '</pre>';
	}


}
 