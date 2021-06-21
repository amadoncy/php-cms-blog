<!DOCTYPE html>
<html>
<head>
    <title>登录</title>
    <link rel="stylesheet" href="Login.css">
    <meta name="content-type"; charset="UTF-8">
</head>
<body>
<div id="bigBox">
        <h1>登录页面</h1>

       <form action="login_check.php" method="post">
            <div class="inputBox">

                    <div class="inputText">
                        <input type="text" id="name" name="username" placeholder="Username" value="">
                    </div>
                <div class="inputText">
                   <input type="password" id="password" name="password" placeholder="Password">
                </div>
	<div class="form-group has-feedback feedback-left">
        <label for="">验证码：</label> 
				<input type="text" name="captcha" />
				<img src="code.php" alt="" id="code_img"/>    
				<a href="" id="change">换一张</a>
        </div>
                <br >
                <div style="color: white;font-size: 12px" >
                    <?php
                    $err = isset($_GET["err"]) ? $_GET["err"] : "";
                    switch ($err) {
                        case 1:
                            echo "用户名或密码错误！";
                            break;

                        case 2:
                            echo "用户名或密码不能为空！";
                            break;
                    } ?>
                </div>
            </div>
           <div>
               <input type="submit" id="login" name="login" value="登录" class="loginButton m-left">
               <input type="reset" id="reset" name="reset" value="重置" class="loginButton">
           </div>
	<div class="register">
                    <a href="register.php" style="color: white">注册账号</a>
	</div>
                <div class="fgtpwd">
                    <a href="#" style="color: white">忘记密码</a>
	</div>
              
</div>
</div>
</form>
</body>
</html>
