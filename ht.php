<!doctype html>
<html>
<head>
<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<meta charset="utf-8">
<title>page</title>
<?php
include('lanjie.php');
include 'footer.php';
?>
    <style type="text/css">
                      div{width: 1520px;
           background-color:#FFF;}
		
       #top{height:100px;
		    }
		
       #nav{height:100px;
		    background-color:#CCC;}
		
       #content{height: 150px;}
		.content_left{width: 300px;
		              height: 450px;
		              background-color:#CCC;
		              margin: 0;
		              float: left;}
		.content_right{width: 1220px;
		               height: 450px;
		               background-color:#BDEFF2;
		               margin: 0;
		               float: right;
  			、
}
		#footer{height: 200px;
			    background-color:#CCC;}
	
		.one{margin-left: 30px;}
		
		.two{margin-left: 20px;
		     margin-top: 10px;}
		.exit{
			float:right;
			font-size:50%;}
		.a{width:1100px;
		   height: 210px;
		   margin-left:60px;
		   margin-top: 30px;
		   border-top:#EFEFEF solid 10px;
		   background-color: #EFEFEF;}
		
		.aa{padding-left: 3%;}
			 
		  
		.b{width:1100px;
		   height: 130px;
		   margin-left:60px;
		   margin-top: 50px;
		   background-color: #EFEFEF;}
		   #time{
		    			font-weight:bold;
		    			color:red;
		    			border: 1.5px soLid #3A3ADD;
		    			width: 200px;
		    			margin: 5px auto;
		    			text-align: center;}
        </style>
</head>

<body>
	
	<script type="text/javascript">
	    var add=setInterval("getTime()",1000);
	    //stop()这个函数主要是清除设置的定时器
	    function stop() {
	        clearInterval(add);
	    }
	    //这个函数主要是获取时间然后写入div中
	    function getTime() {
	        var date=new Date().toLocaleString();//创建date对象，获取时间
	        var id1=document.getElementById("time");//通过div标签的id多去div标签
	        id1.innerHTML=date;//将时间通过innerHTML属性写入div标签中
	    }
	</script>

	<div id="nav">
	   <h2 align="center"><font size="+12" color=#358376 class="one">网站后台管理系统</font></h2><a href="logout.php" target="_parent"><span class="exit">退出登录</span></a></div>
<div id="content">
	<div id="time"></div>
	<div class="content_left">
		<p><font size="+2" color="#0000" class="one"><strong>欢迎您来到后台管理系统</strong></font></p>
		<p><font color="#50BAC0" class="one"><strong>登录名：<font color="#0000"><i><?php echo $_SESSION['username'];?></font></i></strong><br/></font></p>
		<p><font color="#50BAC0" class="one"><strong>身份：<font color="#0000"><i><?php echo $_SESSION['flag'];?></font></i></strong>
</font></p>
		
			
		<h1 align="center">后台管理系统</h1>
		<ul type="none">
			
		<dt><strong>文章分类管理</strong></dt>
		<dd>
		<a href="cate_new.php" target="body">新增分类</a></br>
		<a href="cate_list.php" target="body" onclick="#">分类列表</a>
		</dd>
		<dt><strong>博客文章管理</strong></dt>
		<dd>
		<a href="article_new.php" target="body">新增文章</a></br>
		<a href="article_list.php" target="body">文章列表</a></br>
		</dd>
		<dt><strong>管理员管理</strong></dt>
		<dd>
		<a href="admin_new.php" target="body">新增管理员</a></br>
		<a href="admin_list.php" target="body">管理员列表</a>
		</dd>
		<dt><strong>留言管理</strong></dt>
		<dd>
		<a href="guestbook_list.php" target="body">留言审批</a>
		</dd>


		</ul>
		
	</div>	
	
	<div class="content_right">
		
		<p class="a">
			<font class="two" size="+1">后台管理系统使用说明<br>
			</font>	
			<font class="aa">1，第一次使用本系统，请点击左边管理导航中选项对你的网站信息和一些网站配置参数进行配置。<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2，管理功能导航中各栏目都可以收缩和打开，你可以根据自己需求来选择。<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;3，本系统应用了最新的html5特性和css3属性，在IE11/Edge/Opera/Safar/Chrome等系列新版本浏览器下都获得良好支持，如果你的浏览器错误或非正常现象请联系我们。</font>
		   
		</p>
		
		<p class="b"><font class="two" size="+1">开发信息<br>
			</font>
            <font class="aa">· 制作团队   软件20337：朝阳予锋队<br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;· 联系方式   电话：110120119
		</p>
	</div>	
</div>	
<script>
		        $(function()
		  {
		        $('dt').click(function()
		      {
		         var obj=$(this).next();
		         if($(this).next().css('display')=='block')
		             {
		                 obj.hide('fast');
		               $(this).removeClass('on');
		            }else
		           {
		               obj.show('fast');
		              $(this).addClass('on');
		           }
		     });
		});
		

</body>
</html>
