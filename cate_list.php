<?php
include('conn.php');
include"lanjie.php";
include('header.php');
include('footer.php');
?>
<html>
<head>
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
              <div class="content_right">
                           <h3>分类列表</h3>
                           <table>
                                           <thead>
                                                         <tr>
				     <th>ID</th>
                                                                     <th>分类名</th>
                                                                     <th>排序号</th>
                                                                     <th>操作</th>
                                                         </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                            $sql="select * from category order by order_no asc,id desc";
                                             $rs=mysqli_query($conn,$sql);
                                             while($row=mysqli_fetch_assoc($rs))
                           {
                                             echo'<tr>';
                                             echo'<td>'.$row['id'].'</td>';
                                             echo'<td>'.$row['cate_name'].'</td>';
                                             echo'<td>'.$row['order_no'].'</td>';
                                             echo'<td>';
                                             echo'<a href="cate_edit.php?id='.$row['id'].'">修改</a>/';
                                             echo'<a href="cate_delete.php?id='.$row['id'].'" onclick="return confirm(\'你确定要删除吗？\')">删除</a>';
                                             echo'</td>';
                                             echo'</tr>';
                             }

                             ?>
                             </tbody>
                       </table>
              </div>

</html>