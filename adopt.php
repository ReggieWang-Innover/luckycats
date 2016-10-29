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

$QuestionDescPool = array(
    'q1_search' => '搜索平台',
    'q1_weibo' => '微博/博客',
    'q1_weixin' => '微信/朋友圈',
    'q1_sell' => '淘宝/线下义卖',
    'q1_friend' => '亲朋好友',
    'q1_website' => '幸运土猫官网',
    'q1_tvradio' => '电视/广播',
    'q1_paper' => '纸媒（如报刊、杂志等）',
    'q1_other' => '其他：{$q1_other_add1}',
    
    'q2_outsider' => '已经在北京生活 {$q2_outsider_add1} 年',
    'q2_beijinger' => '从小一直在北京生活，老土著了喵~',
    
    'q3_alwayslocal' => '是，我会一直在北京安家',
    'q3_pannedleave' => '否，我未来几年会离开北京，将来会在 {$q3_plannedleave_add1} 生活',
    'q3_notlocalyet' => '否，我目前不在北京，我在 {$q3_outsider_add1} 生活',
    
    'q4_single' => '单身',
    'q4_nokid' => '已婚，无孩',
    'q4_haskid' => '已婚，有孩，孩子的年龄是：{$q4_haskid_add1} 岁',
    'q4_other' => '其他：{$q4_other_add1}',
    
    'q5_apartment' => '普通住宅楼',
    'q5_business' => '商住两用楼',
    'q5_bungalow' => '平房',
    'q5_house' => '别墅',
    'q5_other' => '其他：{$q5_other_add1}',
    
    'q6_sharerant' => '合租，共有 {$q6_sharerant_add1} 户合租在一套 {$q6_sharerant_add2} 居室的房子内，我租住的房间面积约 {$q6_sharerant_add3} 平米',
    'q6_singlerant' => '独立整租，居室面积约 {$q6_singlerant_add1} 平米',
    'q6_ownedhome' => '居住于自有房产中，居室面积约 {$q6_ownedhome_add1} 平米',
    'q6_other' => '其他：{$q6_other_add1}',
    
    'q7_notinvolve' => '不涉及（自有住房请选择这一项）',
    'q7_agree' => '同意',
    'q7_notcare' => '无所谓',
    'q7_other' => '其他：{$q7_other_add1}',
    
    'q8_parentin' => '是',
    'q8_parentout' => '否，我的父母生活在 {$q8_parentout_add1}',
    'q8_other' => '其他：{$q8_other_add1}',
    
    'q9_agree' => '同意',
    'q9_notcare' => '无所谓',
    'q9_other' => '其他：{$q9_other_add1}',
    
    'q10_yes' => '有',
    'q10_no' => '没有',
    
    'q11_hascat' => '家中有猫： {$q11_hascat_add1} 只 ，已经和我一起生活的时间是 {$q11_hascat_add2} 年',
    'q11_notnow' => '家中无猫，曾经养过猫。<br>最近一次养猫的经历是 {$q11_notnow_add1} 年前，离开时的年纪是 {$q11_notnow_add2} 岁，离开的原因：<br>{$q11_notnow_add3}',
    'q11_notyet' => '家中无猫，未曾养过猫',
    'q11_other' => '其他：{$q11_other_add1}',
    
    'q12_yes' => '没有',
    'q12_no' => '有：{$q12_no_add1}',
    
    'q13_default' => '出行次数约： {$q13_default_add1} 次，计划安置猫咪方式： {$q13_default_add2}',
    
    'q14_yes' => '会',
    'q14_no' => '不会',
    
    'q15_default' => '{$q15_default_add1}',
    
    'q16_must' => '猫咪每年都需要定期免疫 / 家中猫咪会定期免疫',
    'q16_will' => '不了解，但愿意领养后每年按时为猫咪免疫',
    'q16_wont' => '猫咪没有必要定期免疫',
    
    'q17_must' => '理解并赞同猫咪绝育的必要性 / 家中猫咪已经绝育',
    'q17_will' => '不了解，但愿意为领养的猫咪及时完成绝育',
    'q17_wont' => '猫咪没有必要绝育',
        
    'q18_default' => '{$q18_default_add1}',
    
    'q19_default' => '{$q19_default_add1}',
    
    'q20_default' => '{$q20_default_add1}'
);

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

$json = new JSON();

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
    $info['person_survey'] = $json->urljson_decode_arry(base64_decode($info['person_survey']));
    $passtime = time() - $info['identify_time'];
    if ($passtime > 86400)
    {
        $sql = 'UPDATE ' . $ecs->table('adoptor') . 'SET adopt_step = 0 WHERE user_id = ' . $userid;
        $db->query($sql);
        $info['adopt_step'] = ADOPT_STEP_CONNECTINFO;
    }
}



$info['hasEmail'] = $hasEmail;
$info['hasWxid'] = $hasWxid;
$info['userEmail'] = $userEmail;
$timeout = 60 - (time() - $info['identify_time']);
$info['identify_timeout'] = $timeout > 0 ? $timeout : 0;

$info['favcat'] = $favcat_id;

if ($action == 'adopt')
{
    //领养申请
    $smarty->assign('favcat', $favcat_id);
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
    else if ($info['adopt_step'] == ADOPT_STEP_CATSELECT)
    {
        if ($favcat_id != 0)
        {
            $sql = "SELECT goods_name FROM " . $ecs->table('goods') . " WHERE goods_id = $favcat_id and cat_id = 1";
            $favcat_name = $db->getOne($sql, true);
            if ($favcat_name)
            {
                $smarty->assign('favcatName', $favcat_name);
            }
            else 
            {
                $favcat_id = 0;
                $info['favcat'] = 0;
                $smarty->assign('favcat', 0);                
            }
        }
        
        $smarty->display('adopt_catselect.dwt');
    }
}
else if ($action == 'identify')
{
    global $json;
    
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
            
            if (!send_mail('', $userEmail, $tpl['template_subject'], $content, $tpl['is_html'], false, 'adopt'))
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
    global $json;
    
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
else if ($action == 'submitsurvey')
{
    global $json;
    $result = array('errorcode' => 'success');
    
    if ($info['adopt_step'] >= ADOPT_STEP_USERSUVERY)
    {
        $survey = $json->urljson_encode_arry($_POST);
        $surveyb64 = base64_encode($survey);
        $realname = $_POST['realname'];

        $sql =  "UPDATE " . $ecs->table('adoptor') . " SET person_realname='$realname', person_survey = '$surveyb64'";
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
    else {
        $result['errorcode'] = '您的邮件验证已过期，请重新验证';
    }

    echo $json->encode($result);
}
else if ($action == 'selectcat')
{
    global $json;
    $result = array('errorcode' => 'success');
    
    $selectinfo = $_POST;
    $surveyinfo = $info['person_survey'];
    
    $smt = $GLOBALS['smarty'];
    $tpl = get_mail_template('adopt_survey');
    
    $smt->assign($surveyinfo);
    
    $smtparams = array();    
    $smtparams['username'] = $_SESSION['user_name'];
    $smtparams['gender'] = $surveyinfo['gender'] == 'male' ? '男' : '女';
    $smtparams['useremail'] = $userEmail;
    
    $target = '<p>希望领养：';
    if ($selectinfo['catselect'] == 'specified')
    {
        $target .= $selectinfo['favcatname'] . '</p>';
        $target .= '<p>选择原因：' . $selectinfo['catselect_reason'] . '</p>';
        $target .= '<p>接受其他：' . ($selectinfo['otheragree'] == 'yes' ? '是' : '否') . '</p>';
    }
    else
    {
        $target .= '没有特定选择</p>';
    }
    
    $smtparams['target'] = $target;
    
    for ($qid=1; $qid <= 20; $qid++)
    {
        fillSurveyInfo($smt, $smtparams, $surveyinfo, $qid);
    }
    
    $smt->assign($smtparams);
    $mailsubject = '【领养申请】申请人：' . $surveyinfo['realname'] . '（' . $_SESSION['user_name'] . '）';
    $mailbody = '亲爱的 ' . $surveyinfo['realname'] . '，您好！'
              . "\n您所提交的领养申请表单我们已经收到了，非常感谢您如此认真的回答申请表中所提出的问题，对于您关注土猫、选择来幸运土猫领养一只已经被救助且正等待进入新家的流浪猫咪，我们也感到特别的感动和欣慰！"
              . "\n\n\n\n\n"
              . "再次感谢您对幸运土猫的理解和关注！\n\n\n\n";
    $smt->assign('mailsubject', urlencode($mailsubject));
    $smt->assign('mailbody', urlencode($mailbody));
    
    $content = $smt->fetch('str:' . $tpl['template_content']);
    
    if (!send_mail('', $userEmail, $mailsubject, $content, $tpl['is_html'], false, 'adopt'))
    {
        $result['errorcode'] = '邮件发送失败，请稍后再试';
    }
    
    echo $json->encode($result);
}

function fillSurveyInfo(&$smt, &$smtparams, $surveyinfo, $qid)
{
    global $QuestionDescPool;
    $qk = 'q' . $qid;
    $qkv = $qk . '_' . $surveyinfo[$qk];
    $qas = $QuestionDescPool[$qkv];
    $fas = $smt->fetch('str:' . $qas);
    $smtparams[$qk] = $fas;
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