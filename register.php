<?php
header("Content-type: text/html; charset=utf8");
 //利用POST超全局变量 获取表单信息
$username = $_POST["username"];
$password1 = $_POST["password1"];
$phone = $_POST["phone"];
$servername = "localhost";        //以下四行为数据库信息
$mysqluser = "root";            //用户名
$mysqlpas = "78907890@LiPan";            //密码
$mysqldata = "lanmeng";                //要使用的数据库名称
 
$con = new mysqli($servername,$mysqluser,$mysqlpas,$mysqldata);        //连接到数据库(面向对象)
if($con->connect_error){
	die("服务器发生错误，连接失败".$con->connect_error);
}


// echo "连接成功"."<br/>";        //连接数据库成功显示的信息
$sql = "insert into user_info values ('$username','$password1','$phone')";  //插入数据到数据库语句
if($con->query($sql)===true){        //插入成功显示的信息
	echo $_POST["username"];
	echo "恭喜！注册成功！！！请牢记您的账号和密码！！！";
}else {
	echo "注册失败"."<br/>".$con->error;
}
$con->close();
?>