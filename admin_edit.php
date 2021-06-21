<?php
 include "conn.php";
 include "lanjie.php";
$id=$_GET['id'];
$sql="select * from login where id=$id";
$rs=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($rs);
?>
<html>
   <head>
       <style>
              body{background-color:rgba(186,186,186,0.38)}
              h3{background-color:rgba(60,137,30,0.4); margin:0px; height:40px; line-height:40px; text-indent:1em;}
              .style{
                    background-color:white;
                    border: 1px solid rgba(186,186,186);
                    margin: 0px auto;
               }
                table{margin: 20 auto;border:1px solid rgba(186,186,186);}
                .one_td{background-color:rgba(60,137,30,0.4);width:200px;text-align:center;}
                .tow_td{width:300px;}
                input{width:300px;}
                .submit{width:100px;margin-left:100px;}
        </style>
</head>
<body>
         <div class="style">
                  <h3>管理员账户管理</h3>
                   <form action="admin_edit_save.php" method="post">
                             <input type="hidden" name="id" value="<?php echo $id ?>">
                    <table>
		
                            <tr>
                                   <td class="one_td">管理员帐号：</td>
                                   <td class="two_td">
                                          <input type="text" name="username" value="<?php echo $row['username'] ?>">
                                   </td>
                            </tr>
		<tr>
                                   <td class="one_td">管理员密码：</td>
                                   <td class="two_td">
                                          <input type="text" name="password" value="<?php echo $row['password'] ?>">
                                   </td>
                            </tr>
		<tr>
                                   <td class="one_td">管理员身份：</td>
                                   <td class="two_td">
                                          <input type="text" name="flag" value="<?php echo $row['flag'] ?>">
                                   </td>
                            </tr>
                            <tr>
                                   <td class="one_td"> </td>
                                   <td class="two_td">
                                          <input type="submit" name="submit" value="提交">
                                   </td>
                             </tr>
                         </table>
                         </from>
                 </div>
             </body>
</html>