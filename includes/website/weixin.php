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
	
	if (!defined('WEBSITE'))
	{
	    include_once(dirname(__FILE__).'/oath2.class.php');
	    class website extends oath2
	    {
	        function website()
	        {
	            $this->app_key = APP_KEY;
	            $this->app_secret = APP_SECRET;
	            $this->authorizeURL = 'https://open.weixin.qq.com/connect/qrconnect?';
	        }
	        
	        function login($callblock)
	        {
	            //https://open.weixin.qq.com/connect/qrconnect?appid=XXXXXX&response_type=code&scope=snsapi_login&redirect_uri=http%3A%2F%2Fwww.doute365.com%2Fuser.php%3Fact%3Dweixin&state=XXXXXXXX
	            return $this->authorizeURL
	                 . 'appid=' . $this->app_key
	                 . '&response_type=code'
	                 . '&scope=snsapi_login'
	                 . '&redirect_uri=' . $callblock
	                 . '&state=' . $this->app_secret;
	        }
	    }
	}
}


?>