<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>花艺师登录</title>
    <link rel="stylesheet" href="/flower/Public/css/lingdu.css">
    <script src="/flower/Public/js/jquery.js"></script>
    <script src="/flower/Public/js/lingdu.js"></script>
    <script src="/flower/Public/js/respond.js"></script>
    <script type="text/javascript">
$(function(){
 
  $('form[name="login"]').submit(function(){
    // 接收后端的验证，显示相应提示

         $.post("<?php echo U('Index/login');?>",$(this).serialize(),function(data){

        if(data.flag==2){

        window.location.href="<?php echo U('Index/index');?>"; //跳转到主页

        }else if(data.flag==1){

        alert('您输入的密码有误!');

        }else{

        alert('用户名不存在');

        }

        },"json");

   return false;
  });
});



    </script>
<link rel="shortcut icon" type="image/x-icon" href="http://www.iswweb.com/images/favicon.ico" media="screen" /> 
    <style>
		.demo-nav.fixed.fixed-top{z-index:8;background:#fff;width:100%;padding:0;border-bottom:solid 3px #0a8;-webkit-box-shadow:0 3px 6px rgba(0, 0, 0, .175);box-shadow:0 3px 6px rgba(0, 0, 0, .175);}
    </style>
</head>

<body style="background-color:#F2F2F2">
  	<!--顶部-->
   <div class="keypoint  bg-inverse radius text-center" style="background-color:#B0E2FF">
      <h2 style="font-size:20px;">欢迎登录</h2>
     </div>
     <br>
     <br>

<div class="container">
 

<div >

  <form  class="form form-block" style="width:250px;margin:auto;" name="login">

  <div><input type="text" name="type" value="1" style="display:none;" /></div>

  <div class="form-group">

    <div class="label"><label for="username">*账号</label></div>

     <div class="field field-icon-right">
      <span class="icon icon-user"></span>
      <input type="text" class="input radius-rounded" id="username" name="username" size="50" data-validate="required:必填,length#>5:请正确输入帐号" placeholder="请输入帐号" />
    </div>
  </div>

  <div class="form-group">
    <div class="label"><label for="password">*密码</label></div>
    <div class="field field-icon-right">
      <span class="icon icon-key"></span>
      <input type="password" class="input radius-rounded" id="password" name="password" size="50" data-validate="required:必填,compare#>5:请正确输入密码" placeholder="请输入密码" />
    </div>
  </div>


  <br>

  <div class="form-button" ><button class="button  border-main radius-rounded" type="submit" style="margin-left:52px;">登录</button>

    <button class="button  border-gray radius-rounded" type="reset" style="margin-left:10px;">重置</button>
  </div>
</form>
</div>

    

</div> 
<!-- 底部通用模版-->
<!--     <div class="layout bg-gray bg-inverse" style="width:100%;margin:3% auto 0% auto;">
      <div class="container">
        <div class="navbar" >
          
          <div class="navbar-body nav-navicon" id="navbar-footer" style="margin-top:300px;">
            <div class="navbar-text hidden-s hidden-l" style="text-align:center">版权所有 &copy; <a href="http://www.pintuer.com" target="_blank">#</a> All Rights Reserved，蜀ICP备：380959609</div>
         
          </div>
        </div>
      </div>
    </div> -->
<!--模版结束-->





</body>
</html>