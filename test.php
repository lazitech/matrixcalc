<?php
	// (1) 查看用户提交的数据
    var_dump($_POST);
    var_dump(explode(' ',$_POST['input']));
	// (2) 接收用户提交的数据
	// if (isset($_POST['username']) && isset($_POST['password'])) {
	// 	$username = $_POST['username'];
	// 	$password = $_POST['password'];
	// }
    // echo $username,$password;
?>
<form method="post">
  密码：<textarea name="input" cols="10" rows="10">
    </textarea>
  <input type="submit" value="登录">
</form>
