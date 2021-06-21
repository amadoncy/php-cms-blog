<?php
include "session.php";
include "conn.php";
$id=$_GET['id'];
$sql="select * from guestbook where id=$id ";
$rs1=mysqli_query($conn,$sql);
$row1=mysqli_fetch_assoc($rs1)
?>
<html>
<head>
    <style>
        a{text-decoration: none;}
        a:link,a:visited{color: black;}
        a:hover{color: red;}
        body{background-color: rgba(186,186,186,0.38)}
        h3{background-color:rgba(60,137,30,0.4);;margin: 0px;height: 40px;line-height: 40px;text-indent: 1em;}
        .one{background-color: white;}
        table{margin: 20px auto; border-right:1px solid rgba(186,186,186); border-bottom:1px solid rgba(186,186,186);}
        td{border-left:1px solid rgba(186,186,186); border-top:1px solid rgba(186,186,186);text-align: center;}
        tr{height: 40px;}
        thead{background-color:rgba(60,137,30,0.4);}
    </style>
</head>
<div class="one">
    <h3>文章列表</h3>
    <form action="guestbook_edit_save.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
    <table>
        <thead>
        <tr>
            <th width="150px">是否发布</th>
            <th width="1100px">留言内容</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql="select * from guestbook where id=$id ";
        $rs=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($rs))
        {
            echo '<tr>';
            echo '<td>'.'<input type="radio" name="examine">'.'</td>';
            echo '<td>'.$row['content'].'</td>';
            echo '</tr>';
        }
        echo '<tr>';
        echo '<td colspan="2">'.'<input type="submit" value="提   交">'.'</td>';
        echo '</tr>';
        ?>
        </tbody>
    </table>
    </form>
</div>
</html>
