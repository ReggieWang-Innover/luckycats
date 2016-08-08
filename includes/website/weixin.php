<?php 
// 微信登陆

if (defined('WEBSITE') || defined('GETINFO'))
{
	global $_LANG;
	$_LANG['help']['APP_KEY'] = 'APP ID';
	$_LANG['help']['APP_SECRET'] = 'APP Secret';
	
	$_LANG['APP_KEY'] = 'APP ID';
	$_LANG['APP_SECRET'] = 'KEY';
	
	$i = isset($web) ? count($web) : 0;
	// 类名
	$web[$i]['name'] = '微信';
	// 文件名，不包含后缀
	$web[$i]['type'] = 'weixin';
	
	$web[$i]['className'] = 'weixin';
	
	// 作者信息
	$web[$i]['author'] = '`reggie.wang`';
	
	// 作者QQ
	$web[$i]['qq'] = '123456';
	
	// 作者邮箱
	$web[$i]['email'] = 'none@qq.com';
	
	// 申请网址
	$web[$i]['website'] = 'http://mp.weixin.qq.com';
	
	// 版本号
	$web[$i]['version'] = '1.0v';
	
	// 更新日期
	$web[$i]['date']  = '2016-8-6';
	
	// 配置信息
	$web[$i]['config'] = array(
		array('type'=>'text' , 'name'=>'APP_KEY', 'value'=>''),
		array('type'=>'text' , 'name' => 'APP_SECRET' , 'value' => ''),
	);
}


?>