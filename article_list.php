<?php
include('header.php');
include('conn.php');
include"lanjie.php";
include 'footer.php';
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
                           <h3>文章列表</h3>
                           <table>
                                           <thead>
                                                         <tr>
                                                                     <th width="5%">ID</th>
                                                                     <th width="10%">标题</th>
                                                                     <th width="5%">文章分类</th>
                                                                     <th width="10%">作者</th>
                                                                     <th width="40%">内容</th>
                                                                     <th width="10%">点击率</th>
                                                                     <th width="20%">操作</th>
                                                         </tr>
                                            </thead>
                                            <tbody>
                                            <?php
                                             $sql="select article.*,category.cate_name from article,category where article.cate_id=category.id order by article.id asc";
                                             $rs=mysqli_query($conn,$sql);
                                             while($row=mysqli_fetch_assoc($rs))
                           {
                                             echo'<tr>';
                                             echo'<td>'.$row['id'].'</td>';
                                             echo'<td>'.$row['title'].'</td>';
                                             echo'<td>'.$row['cate_name'].'</td>';
                                             echo'<td>'.$row['author'].'</td>';
		             echo'<td>'.mb_substr($row['content'],0,20,'utf-8').'</td>';
		             echo'<td>'.$row['views'].'</td>';
                                             echo'<td>';
                                             echo'<a href="article_edit.php?id='.$row['id'].'">修改</a>/';
                                             echo'<a href="article_delete.php?id='.$row['id'].'" onclick="return confirm(\'你确定要删除该数据吗？\')">删除</a>';
                                             echo'</td>';
                                             echo'</tr>';
                             }
                             ?>
                             </tbody>
                       </table>
              </div>
</html>