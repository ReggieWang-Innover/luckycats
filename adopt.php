<?php

/**
 * ECSHOP 商品详情
 * ============================================================================
 * * 版权所有 2005-2012 上海商派网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.ecshop.com；
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * $Author: liubo $
 * $Id: goods.php 17217 2011-01-19 06:29:08Z liubo $
*/

define('IN_ECS', true);

define('ADOPT_STEP_CONNECTINFO',      0); //填写联系信息
define('ADOPT_STEP_USERSUVERY',       1); //填写调查问卷
define('ADOPT_STEP_CATSELECT',        2); //选择待领养猫咪
define('ADOPT_STEP_ADOPTAUDIT',       3); //沟通审核
define('ADOPT_STEP_INTERVIEW',        4); //面谈
define('ADOPT_STEP_ADOPTPREPARE',     5); //领养准备
define('ADOPT_STEP_REPAYVISIT',       6); //回访

define('ADOPT_CONNECTTYPE_EMAIL',     0); //email 联系
define('ADOPT_CONNECTTYPE_WEIXIN',    1); //weixin 联系

require(dirname(__FILE__) . '/includes/init.php');
require(ROOT_PATH . 'includes/cls_json.php');

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = false;//888
}

/*------------------------------------------------------ */
//-- INPUT
/*------------------------------------------------------ */
$favcat_id = isset($_REQUEST['favcat'])  ? intval($_REQUEST['favcat']) : 0;
$action = isset($_REQUEST['act']) ? trim($_REQUEST['act']) : 'adopt';
$step = 0;

assign_template();
$position = assign_ur_here('adopt');
$smarty->assign('page_title',       $position['title']);    // 页面标题
$smarty->assign('ur_here',          $position['ur_here']);  // 当前位置


if (empty($_SESSION['user_id']))
{
    //没有登陆，首先要求登陆
    $smarty->display('adopt_loginuser.dwt');
    exit;
}

$userid = $_SESSION['user_id'];
$userEmail = $_SESSION['email'];
$hasEmail = !empty($userEmail) && substr($userEmail, -8) != '@wx.null';

$sql = "SELECT wxid FROM " .$GLOBALS['ecs']->table('users'). " WHERE user_id = $userid";
$wxid = $GLOBALS['db']->getOne($sql);
$hasWxid = !empty($wxid);


$info = array(
    'user_id' => $userid,
    'trusted_state' => 0,
    'adopt_step' => ADOPT_STEP_CONNECTINFO,
    'person_connecttype' => ADOPT_CONNECTTYPE_EMAIL,
    'person_realname' => '',
    'person_idnumber' => '',
    'person_idcard_img' => '',
    'person_detail_addr' => '',
    'person_survey' => '',
    'identify_code' => '',
    'identify_time' => 0,
    'new_adoptor' => true,
);


$sql = 'SELECT * FROM ' .$ecs->table('adoptor') . ' WHERE user_id = ' . $userid;
$adoptor = $db->GetRow($sql);

if ($adoptor)
{
    $info = $adoptor;
    $info['person_survey'] = base64_decode($info['person_survey']);
}

$info['hasEmail'] = $hasEmail;
$info['hasWxid'] = $hasWxid;
$info['userEmail'] = $userEmail;
$timeout = 60 - (time() - $info['identify_time']);
$info['identify_timeout'] = $timeout > 0 ? $timeout : 0;

$info['favcat'] = $favcat_id;

if ($action == 'submitsurvey')
{
    if ($info['adopt_step'] >= ADOPT_STEP_USERSUVERY)
    {
        $json   = new JSON;
        $survey = $json->encode($_POST);
        $surveyb64 = base64_encode($survey);
        $sql =  "UPDATE " . $ecs->table('adoptor') . " SET person_survey = '$surveyb64'";
        if ($info['adopt_step'] == ADOPT_STEP_USERSUVERY)
        {
            $nextStep = ADOPT_STEP_CATSELECT;
            $sql .= ", adopt_step = $nextStep";
            $info['adopt_step'] = $nextStep;
        }
        
        $sql .= " WHERE user_id = $userid";
        
        $db->query($sql);
        $info['person_survey'] = $survey;
    }
    
    $action = 'adopt';
}

if ($action == 'adopt')
{
    //领养申请
    $smarty->assign('adopt_info', $info);
    
    if ($info['adopt_step'] == ADOPT_STEP_CONNECTINFO)
    {
        //无状态，先进行认证
        if ($info['new_adoptor'])
        {
            $sql = 'INSERT INTO ' . $ecs->table('adoptor') 
                 . ' (user_id, trusted_state, adopt_step, person_realname, person_idnumber, person_idcard_img, person_detail_addr, person_survey)'
                 . " VALUES ($userid, 0, 0, NULL, NULL, NULL, NULL, NULL)";
            $db->query($sql);
        }
        
        $smarty->display('adopt_preadopt.dwt');
    }
    else if ($info['adopt_step'] == ADOPT_STEP_USERSUVERY)
    {
        $smarty->display('adopt_usersuvery.dwt');
    }
}
else if ($action == 'identify')
{
    $json   = new JSON;
    
    $smt = $GLOBALS['smarty'];
    $identify_code = '';
    $type = trim($_REQUEST['type']);
    
    $result = array('errorcode' => 'success', 'type' => $type);
    
    if ($type == 'email') {
        if ($info['hasEmail']) {
            $identify_code = generateIdentifyCode($userid, ADOPT_CONNECTTYPE_EMAIL);
            $tpl = get_mail_template('adopt_connect_identify');
            $smt->assign('identify_code', $identify_code);
            $content = $smt->fetch('str:' . $tpl['template_content']);
            
            if (!send_mail('', $userEmail, $tpl['template_subject'], $content, $tpl['is_html']))
            {
                $result['errorcode'] = '邮件发送失败，请稍后再试';
            }
        } else {
            $result['errorcode'] = '您尚未注册电子邮件';
        }
    }
    elseif ($type == 'weixin') {
    }
    else {
        
    }
    
    echo $json->encode($result);
}
else if ($action == 'verify')
{
    $json   = new JSON;
    
    $type = trim($_REQUEST['type']);
    $code = trim($_REQUEST['code']);
    $result = array('errorcode' => 'success');
    $passtime = time() - $info['identify_time'];
    
    if (empty($info['identify_code']) || $passtime < 0 || $passtime > 86400)
    {
        $result['errorcode'] = '请首先选择联系方式并获取验证码';
    }
    else if ($type == 'email')
    {
        if ($info['person_connecttype'] != ADOPT_CONNECTTYPE_EMAIL)
        {
            $result['errorcode'] = '联系方式与认证码不符，请在修改联系方式后重新获取验证码';
        }
    }
    else if ($type == 'weixin')
    {
        if ($info['person_connecttype'] != ADOPT_CONNECTTYPE_WEIXIN)
        {
            $result['errorcode'] = '联系方式与认证码不符，请在修改联系方式后重新获取验证码';
        }
    }
    else
    {
        $result['errorcode'] = '请选择联系方式并获取验证码';
    }
    
    if ($result['errorcode'] == 'success')
    {
        if ($info['identify_code'] != $code)
        {
            $result['errorcode'] = '验证码不匹配，请检查并重新输入验证码，或重新获取验证码';
        }
        else 
        {
            $nextStep = ($info['adopt_step'] >= ADOPT_STEP_USERSUVERY) ? $info['adopt_step'] : ADOPT_STEP_USERSUVERY;
            $sql = "UPDATE " . $ecs->table('adoptor') . "SET adopt_step = $nextStep WHERE user_id = $userid";
            $db->query($sql);
        }
    }
    
    echo $json->encode($result);
}

function generateIdentifyCode($userid, $connecttype)
{
    global $ecs;
    global $db;
    
    $code = '';
    $chars = 'ABCDEFGHJKLMNPQRSTUVWXYZ23456789abcdefghjkmnpqrstuvwxyz';
    $max = strlen($chars) - 1;
    
    for ($i = 0; $i < 6; $i++) {
        $code .= $chars[mt_rand(0, $max)];
    }
    
    $now = time();
    $sql = "UPDATE " . $ecs->table('adoptor') . "SET person_connecttype = $connecttype, identify_code='$code', identify_time=$now WHERE user_id = $userid";
    $db->query($sql);
    
    return $code;
}

?>