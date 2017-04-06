<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>Demo - Validform - 一行代码搞定整站的表单验证！ &copy;瑞金佬的前端路</title>
<link rel="stylesheet" href="/thinkphp/Public/css/style.css" type="text/css" media="all" />
<link href="/thinkphp/Public/css/demo.css" type="text/css" rel="stylesheet" />
</head>

<body> 
<form class="registerform" action="" enctype="multipart/form-data" method="post">
 <table width="100%" style="table-layout:fixed;">
      <tr><td class="yanz">asdsad</td></tr>
     <tr>
        <td><input type="text" name="uswernme" class="inputxt3245" datatype="s6-10" nullmsg="用户名不能为空" errormsg="用户名只能是位字符" /><div class="Validform_checktip" >sadsadsa</div></td>
     </tr>
	  <tr>
        <td><input type="text" name="pwd" class="inputxt3245" datatype="s6-10" nullmsg="123" errormsg="用户名只能是位字符" /><div class="Validform_checktip" >sadsadsa</div></td>
     </tr>
	  <tr>
        <td><input type="file" name="photo"/></td>
     </tr>
   <input type="submit"/>
</form>
 

<script type="text/javascript" src="/thinkphp/Public/js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="/thinkphp/Public/js/Validform_v5.3.2_min.js"></script>

<script type="text/javascript">
$(function(){
	//$(".registerform").Validform();  //就这一行代码！;
	
	//方法一;
	$(".registerform").Validform({
		ajaxPost:true,
		tiptype:function(msg,o,cssctl){
		if(!o.obj.is("form")){
		  if(o.type!=2){
		     o.obj.parents('.registerform').find('.yanz').text(msg);
			}
		   
		  }
		   
		},
		callback:function(data){
			if(data.status=="y"){
				setTimeout(function(){
					$.Hidemsg(); //公用方法关闭信息提示框;显示方法是$.Showmsg("message goes here.");
				},2000);
			}
		}
	});
	
})
</script>
</body>
</html>