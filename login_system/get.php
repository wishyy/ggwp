<? php
include_once ("connect.php");
session_start();/*�����滭*/
if (isset($_SESSION['username'])){
	$json['nc'] = $$_SESSION['nc'];/*���ǳư��ǳƴ�������һ�᷵�ظ���ҳ*/
	$json['flag']=true;/*�û��Ѿ���¼����־flagΪtrue*/
}else
    $json['flag']=false;/*�û���δ��¼����־flagΪfalse*/
echo json_encode($json);/*����json*/
/*���������жϵ�¼״̬*/