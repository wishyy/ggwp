<?php
include_once ("connect.php");
session_start();/*�����Ự*/
$user=$_GET['username'];/*��ȡ��¼���ύ����������*/
$pwd=$_GET['pwd'];
$yzm=$_GET['yzm'];
if($yzm==$_SESSION['vCode']){/*���û��������֤���ͼƬ��֤����ͬʱ*/
    $result=$link->query("select * from `user` where username='$user' and pwd='$pwd'");
    $link = null;
    $row = $result->fetch();/*��ȡ�����ݿ��ȡ������*/
    if ($row) {/*������ݴ��ڣ����û���¼�ɹ�*/
        $_SESSION['username'] = $row['username'];
        /*���û������ǳƴ��ڷ����������Զ��ҳ��ʹ��*/
        $_SESSION['nc'] = $row['nc'];
        $flag=3;
    }else{/*�û������������*/
        $flag=2;
    }
}else{/*��֤���������*/
    $flag=1;
}
echo $flag;