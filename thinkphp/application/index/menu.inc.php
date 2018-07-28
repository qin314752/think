<?php


/*array(菜单名，菜单url参数，是否显示)*/
$i=0;
$menu_left = array();

$i++;
$menu_left[$i]= array('系统管理',1);
$menu_left[$i]['low_title'][] = array('部门管理','/Index/Jurisdiction/index',1);
$menu_left[$i]['low_title'][] = array('部门管理','/Index/Jurisdiction/jurisdiction',1);


$i++;
$menu_left[$i]= array('系统管理1',1);
$menu_left[$i]['low_title'][] = array('部门管理1','/Index/Jurisdiction/index',1);
$menu_left[$i]['low_title'][] = array('部门管理1','/Index/Jurisdiction/jurisdiction',1);




return $menu_left;
?>

