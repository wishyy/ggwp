<? php
include_once ("connect.php");
session_start();/*开启绘画*/
if (isset($_SESSION['username'])){
	$json['nc'] = $$_SESSION['nc'];/*把昵称把昵称存起来，一会返回给首页*/
	$json['flag']=true;/*用户已经登录，标志flag为true*/
}else
    $json['flag']=false;/*用户还未登录，标志flag为false*/
echo json_encode($json);/*返回json*/
/*以上用于判断登录状态*/