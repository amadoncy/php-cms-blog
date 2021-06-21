<?php
include "conn.php";
include "session.php";
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
    <form action="guestbook_edits_saves.php" method="post">
    <h3>留言编辑列表</h3>
    <table>
        <thead>
        <tr>
            <th width="100px">是否发布</th>
            <th width="50px">ID</th>
            <th width="200px">用户名称</th>
            <th width="150px">文章标题</th>
            <th width="550px">留言内容</th>
            <th width="300px">留言时间</th>
        </tr>
        </thead>
        <tbody>
        <?php
        $sql="select guestbook.*,article.title from guestbook,article where guestbook.article_id=article.id  order by guestbook.id asc";
        $rs=mysqli_query($conn,$sql);
        while($row=mysqli_fetch_assoc($rs))
        {
            echo '<tr>';
            echo "<td>"."<input type='checkbox' name='examine[]' value='$row[id]'>"."</td>";
            echo '<td>'.$row['id'].'</td>';
            echo '<td>'.$row['username'].'</td>';
            echo '<td>'.$row['title'].'</td>';
            echo '<td>'.mb_substr(strip_tags($row['content']),0,35,'utf-8').'</td>';
            echo '<td>'.$row['intime'].'</td>';
            echo '</tr>';
        }
        echo '<tr>';
        echo '<td colspan="6">'.'<input type="submit" value="提    交">'.'</td>';
        echo '</tr>';
        ?>
        </tbody>
    </table>
    </form>
</div>
</html>