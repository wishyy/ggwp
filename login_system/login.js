<script src="js/jquery-2.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    function toggle(){
        $.getJSON("php/get.php",function (res) {
            //��ȡ��ǰ�û��Ƿ��¼
            if(res['flag']){//�û��Ѿ���¼����ʾ�ǳƺ�ע��ѡ��
                $('li.toggle').toggleClass('hidden');
                $('#nicheng').html(res['nc'])
            }
        });
    }
    $('#form_login').submit(function (e) {/*��¼*/
        e.preventDefault();/*��ֹ��Ĭ���¼���ҳ��ȫ��ˢ��*/
        var data=$('#form_login').serialize();/*����������ݰ�װ����*/
        $.getJSON('php/login.php',data,function (res) {
            /*data������������ݴ���php���ص���������php��������ֵ*/
            if(res==3){//�û��������롢��֤�붼������ȷ
                toggle();/*�޸���ҳѡ��˵�*/
                $('#loginer').modal('hide');/*�ر�ģ̬��*/
            }else if(res==2){
                $('#info').html('�û�������������')
            }else {
                $('#info').html('��֤������')
            }
        })
    });
    $('#logout').click(function () {
        confirm('ȷ��Ҫע����');
        $.getJSON('php/logout.php',function (res) {
            if(res)toggle();
        })
    })
			});