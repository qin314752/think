<?php

/*array(菜单名，菜单url参数，是否显示)*/
$i=0;
$menu_left = array();
//=================================================================
// $menu_left[$i]= array('首页',1);
// $menu_left[$i]['low_title'][] = array('首页','Index/index',1);
// 
//=================================================================
$i++;
$menu_left[$i]= array('订单管理',1);
$menu_left[$i]['low_title'][] = array('订单列表','Indent/indent_list',1);
$menu_left[$i]['low_title'][] = array('退单列表','Indent/refund_find',1);
$menu_left[$i]['low_title'][] = array('微信后台退单列表','Indent/refund_list',1);
$menu_left[$i]['low_title'][] = array('评论管理','Indent/evaluate_list',1);


$i++;
$menu_left[$i]= array('系统管理',1);

$menu_left[$i]['low_title'][] = array('管理员管理','Rbac/admin_user_list',1);

$menu_left[$i]['low_title'][] = array('角色管理','Rbac/admin_role',1);
$menu_left[$i]['low_title'][] = array('管理组权限管理','/Index/Jurisdiction/jurisdiction',1);

$menu_left[$i]['low_title'][] = array('数据库信息','SysData/index',1);
//==========================================================

$i++;
$menu_left[$i]= array('第三方接口',1);

$menu_left[$i]['low_title'][] = array('通知信息接口','Notice/index',1);

$menu_left[$i]['low_title'][] = array('通知信息模板','Notice/template',1);

$menu_left[$i]['low_title'][] = array('手机短息记录','Notice/phone',1);
//==========================================================
$i++;
$menu_left[$i]= array('抽奖',0);

$menu_left[$i]['low_title'][] = array('抽奖配置','Carousel/raffle',0);

$menu_left[$i]['low_title'][] = array('用户抽奖','Carousel/raffle_list',1);
//==========================================================

$i++;
$menu_left[$i]= array('广告',1);

$menu_left[$i]['low_title'][] = array('轮播  广告','Carousel/advertising',0);
return $menu_left;
?>

