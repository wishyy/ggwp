<?php
session_start();//�����Ự
$img = imagecreatetruecolor(60, 30);//�������ͼ����Դ����С60*30
$black = imagecolorallocate($img, 0x00, 0x00, 0x00);//����һ����ɫ
$green = imagecolorallocate($img, 0x00, 0xFF, 0x00);//����һ����ɫ
$white = imagecolorallocate($img, 0xFF, 0xFF, 0xFF);//����һ����ɫ
imagefill($img,0,0,$white);// �����Ͻǿ�ʼ����ɫ����������ɫΪ��ɫ
//�����������֤��
$code = '';
for($i = 0; $i < 4; $i++) {
    $code .= rand(0, 9);
}
$_SESSION['vCode']=$code;//����Ự������
imagestring($img, 5, 8, 8, $code, $black);//imagestring ($image , $font , $x , $y ,$s ,$col )
//���������ţ���ֹ����ʶ��
for($i=0;$i<100;$i++) {
    imagesetpixel($img, rand(0, 60) , rand(0, 30) , $black);//��ͼƬ�ϻ��һ�㡣���� x��y Ϊ���������꣬���� col ��ʾ�õ����ɫ
    imagesetpixel($img, rand(0, 60) , rand(0, 30) , $green);//������ɫ�ĵ�
}
//�����֤��
header("content-type: image/png");//˵���������ͼƬ���͸�ʽ
imagepng($img);//������������һ�� PNG ��ʽͼ��
imagedestroy($img);//����ͼ��,�ͷ��� $img �������ڴ�