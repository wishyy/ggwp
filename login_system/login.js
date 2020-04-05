<script src="js/jquery-2.1.3.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
    function toggle(){
        $.getJSON("php/get.php",function (res) {
            //获取当前用户是否登录
            if(res['flag']){//用户已经登录，显示昵称和注销选项
                $('li.toggle').toggleClass('hidden');
                $('#nicheng').html(res['nc'])
            }
        });
    }
    $('#form_login').submit(function (e) {/*登录*/
        e.preventDefault();/*阻止表单默认事件，页面全局刷新*/
        var data=$('#form_login').serialize();/*将表单里的数据包装起来*/
        $.getJSON('php/login.php',data,function (res) {
            /*data：将表单里的数据传给php，回调函数接受php返回来的值*/
            if(res==3){//用户名、密码、验证码都输入正确
                toggle();/*修改首页选项菜单*/
                $('#loginer').modal('hide');/*关闭模态框*/
            }else if(res==2){
                $('#info').html('用户名或密码有误')
            }else {
                $('#info').html('验证码有误')
            }
        })
    });
    $('#logout').click(function () {
        confirm('确定要注销？');
        $.getJSON('php/logout.php',function (res) {
            if(res)toggle();
        })
    })
			});