<?php
session_start();
unset($_SESSION['username']);//�����û���
unset($_SESSION['nc']);//�����ǳ�
echo json_encode(true);//���ؽ��