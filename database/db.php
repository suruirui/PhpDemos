<?php
/**  js: ecmascript 基本语法  dom 操作html css
 *   php : 基本语法        数据库扩展 操作数据库
 * PHP操作数据库
 * PHP支持各种数据 mysql等等
 * PHP中一个数据库可能有一个或者多个扩展，其中既有官方的，也有第三方提供的。 API  ApplicationInterface应用程序接口
 * 像Mysql常用的扩展有原生的mysql库，也可以使用增强版的mysqli扩展，
 * 还可以使用PDO进行连接与操作
 */
/**
 * 使用mysqli扩展库 去操作mysql数据库
 */
header("Content-Type: text/html;charset=utf-8");
//header("Content-Type: text/json;charset=UTF-8");
//1. 连接数据库 并选择数据库
$host = "localhost";  //主机
$username = "root";   //用户名
$password = "root";   //密码
$db = "test";         //数据库名

$connect = mysqli_connect($host,$username,$password,$db);//mysqli_connect打开数据库连接，并选择数据库
mysqli_query($connect, "set names 'utf8'");
if(!$connect){  //当连接失败
    echo "连接失败";
    exit;  //退出
}
//echo "连接成功";
//2. 操作数据库
//定义sql语句
//插入数据
$sql = "INSERT INTO users  VALUES('lisi222','123456')";
//删除数据
$sql = "delete from users where username = 'lisi222'";
//修改数据
$sql = "update users set username = 'lisi123' where username = 'lisi222'";
$sql = "delete from test";
//查询数据
$sql = "select * from users";
//向数据库发送SQL语句
//echo $sql;
$result = mysqli_query($connect,$sql);
//echo "执行成功";

while($row = mysqli_fetch_assoc($result)){ //mysqli_fetch_assoc从结果集取出一行数据 返回数组
//    echo '用户名：'.$row['username'].' ,密码: '.$row['password'].'<br>';
    echo json_encode($row)."-"; //json_encode把数组转为JSON字符串
}
//3.关闭数据库
mysqli_close($connect);

//182 3513 1575 




