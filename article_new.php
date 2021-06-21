<?php
include"conn.php";
include"lanjie.php";
include"header.php";
include 'footer.php';
?>
<html>
<head>
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
<div class="content_right">
      <h3>发布文章</h3>
      <form action="article_new_save.php" method="post" enctype="multipart/form-data">

      <table>
             <tr>
                   <td>
                           文章标题：
                   </td>
                   <td>
                           <input type="text" name="title" size="50px">
                   </td>
           </tr>
           <tr>
                 <td>
                         文章分类：
                 </td>
                 <td>
                       <select name="cate_id">
                              <option>请选择分类</option>
                              <?php
                                      $sql="select * from category order by order_no asc,id desc";
                                      $rs=mysqli_query($conn,$sql);
                                      while ($row=mysqli_fetch_assoc($rs))
                                      {
                                          echo'<option value="'.$row['id'].'">';
                                          echo $row['cate_name'];
                                          echo'</option>';
                                      }
                              ?>
                     </select>
                  </td>
              </tr>
              <tr>
                     <td>
                           文章作者：
                     </td>
                     <td>
                           <input type="text" name="author" size="50px">
                     </td>
              </tr>
              <tr>
                     <td>
                           文章内容：
                     </td>
                     <td>
                             <textarea cols="60" rows="10" name="content"></textarea>
                     </td>
              </tr>
              <tr>
                     <td>
                           上传图片：
                     </td>
                     <td>
                             <input type="file" name="img">
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