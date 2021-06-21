<?php
 include "conn.php";
 include "lanjie.php";

$id=$_GET['id'];
$sql="select * from article where id=$id";
$rs=mysqli_query($conn,$sql);


if(mysqli_num_rows($rs) > 0){
      $row=mysqli_fetch_assoc($rs);
}else{
 	echo '数据不存在!';exit;
}
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
                  <h3>修改文章</h3>
                   <form action="article_edit_save.php?id=<?php echo $id;?>" method="post" enctype="multipart/form-data">
                             
                    <table>

                           <tr>
                                   <td class="one_td">标题：</td>
                                   <td class="two_td">
                                          <input type="text" name="title" value="<?php echo $row['title'] ?>">
                                   </td>
                            </tr>
		<tr>
                                   <td class="one_td">文章分类</td>
                 	<td>
                       	<select name="cate_id">
                              	<option>请选择分类</option>
                              	<?php
                                      $sql="select * from category order by order_no asc,id desc";
                                      $rs=mysqli_query($conn,$sql);
                                      while ($row2=mysqli_fetch_assoc($rs))
                                      {
			if($row2['id']==$row['cate_id']){
		          echo '<option value="'.$row2['id'].'" selected="selected">'. $row2['cate_name'];			
		      }else{
                                          echo '<option value="'.$row2['id'].'">'. $row2['cate_name'].'</option>';
}
                                      }
			mysqli_free_result($rs);
                              	?>
                    	</select>
                  `	</td>
                            </tr>	
                            <tr>
                                   <td class="one_td">作者：</td>
                                   <td class="two_td">
                                          <input type="text" name="author" value="<?php echo $row['author'] ?>">
                                   </td>
                            </tr>
		<tr>
                                   <td class="one_td">内容：</td>
                                   <td class="two_td">
                                        <textarea name="content" cols="60" rows="10"><?php echo $row['content'];?></textarea>
                                   </td>
                            </tr>
		<tr>
                    	<td class="one_td">上传文件：</td>
                     <td>
	             <img src="../upfiles/<?php echo $row['img'];?>"width="200"/><br/>
                             <input type="file" name="img">
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