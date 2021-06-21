<?php
include"conn.php";
include"lanjie.php";
include"header.php";
include 'footer.php';
?>
<html>
<head>
<div class="content_right">
         <title></title>
<style>
              a{text-decoration:none;}
              a:link,a:visited{color:black;}
              a:hover{color:red;}
              body{background-color:rgba(186,186,186,0.38)}
              h3{background-color:rgba(60,137,30,0.4);margin:0px;height:40px;line-height:40px;text-indent:1em;}
     
              table{margin: 20px auto; border-right:1px solid rgba(186,186,186); border-bottom:1px solid rgba(186,186,186);}
              td{border-left:1px solid rgba(186,186,186); border-top:1px solid rgba(186,186,186);width:300px; text-align:center;}
              th{width:300px;}
              tr{height:40px;}
              thead{background-color:rgba(60,137,30,0.4);}
        </style>
         
</head>
<h3 style="margin-left: 0px">新增管理员</h3>

<form action="admin_new_save.php" method="post" id="form">

<table>

<tr>
                   <td>
                           管理员帐号：
                   </td>
                   <td>
                           <input type="text" name="username" size="50px">
                   </td>
</tr>

<tr>
                 <td>
                         管理员密码：
                 </td>
	<td>
 	<input type="text" name="password" size="50px">
	</td>
 </tr>
<tr>
                   <td>
                          管理员身份：
                   </td>
                   <td>
                           <input type="text" name="flag" size="50px">
                   </td>
</tr>
              <tr>
                    <td colspan="2">
                           <input type="submit" value="提        交">
                    </td>
              </tr>
         </table>
         </form>
</div>
</html>


