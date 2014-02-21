<?php
 /**
 * Example Application

 * @package Example-application
 */

require './class/Smarty.class.php';

$smarty = new Smarty;

//$smarty->force_compile = true;
//$smarty->debugging = true;
$smarty->cache_lifetime = 120;
$smarty->template_dir = "./templates/";
$smarty->compile_dir = "./templates_c/";
$smarty->config_dir = "./configs/";
$smarty->cache_dir = "./cache/";
$smarty->left_delimiter = '<{';
$smarty->right_delimiter = '}>';
$id=$_GET['id'];
$op=$_GET['op'];
if($op=='product'){
	$name='理财产品';
}elseif($op=='invest'){
	$name='项目投资';
}elseif($op=='pay'){
	$name='第三方支付';
}elseif($op=='good'){
	$name='公益信托';
}elseif($op=='messge'){
	$name='通知公告';
}elseif($op=='show'){
	$name='信息披露';
	$op='showm';
}elseif($op=='news'){
	$name='业内新闻';
}elseif($op=='focus'){
	$name='财经聚焦';
}elseif($op=='company'){
	$name='公司新闻';
}elseif($op=='people'){
	$name='人员招聘';
}elseif($op=='activity'){
	$name='公司活动';
}
include("config.php");
$query = mysql_query("select * from $op where id='$id'");
$value=  mysql_fetch_array($query);
$smarty->assign("subject",$value['subject']);
$smarty->assign("message",$value['message']);
$smarty->assign("name",$name);


$smarty->display('more.html');
