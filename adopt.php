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

require(dirname(__FILE__) . '/includes/init.php');

if ((DEBUG_MODE & 2) != 2)
{
    $smarty->caching = false;//888
}

/*------------------------------------------------------ */
//-- INPUT
/*------------------------------------------------------ */
$catadopt_id = isset($_REQUEST['catid'])  ? intval($_REQUEST['catid']) : 0;
$action = isset($_REQUEST['act']) ? trim($_REQUEST['act']) : 'adopt';
$step = 0;

if (empty($_SESSION['user_id']))
{
    //没有登陆，首先要求登陆
    ecs_header("Location: user.php\n");
    exit;
}

$userid = $_SESSION['user_id'];

$info = array(
    'user_id' => $userid,
    'trusted_state' => 0,
    'adopt_step' => ADOPT_STEP_CONNECTINFO,
    'person_realname' => '',
    'person_idnumber' => '',
    'person_idcard_img' => '',
    'person_detail_addr' => '',
    'person_survey' => ''
);

if ($action == 'adopt')
{
    //领养申请
    $sql = 'SELECT * FROM ' .$ecs->table('adoptor') . ' WHERE user_id = ' . $userid;
    $adoptor = $db->GetRow($sql);
    
    if ($adoptor)
    {
        $info = $adoptor;
    }
    
    $position = assign_ur_here('adopt');
    $smarty->assign('page_title',       $position['title']);    // 页面标题
    $smarty->assign('ur_here',          $position['ur_here']);  // 当前位置
    
    $smarty->assign('adopt_info', $info);
    
    if ($info['adopt_step'] == 0)
    {
        //无状态，先进行认证
        $sql = 'UPDATE'
        $smarty->display('adopt_preadopt.dwt');
    }
}


?>