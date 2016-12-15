<?php
/**
 * php基础

 *  变量 数据类型(弱类型,资源和空类型) 常量
 *  运算符  算术运算符 赋值运算符 = & 比较运算符 三元运算符 逻辑运算符 and or  ! && ||
 *          字符串连接运算符.
    流程控制
 */
//定义一个变量
//注意变量的命名规则
//弱类型  var a = 0;  var b = 'hello';      解释执行  php js
//了解下强类型 int a = 0;  String str = "hello";  编译执行  先编译.java ->.class 后执行  .class
$a = 'Hello World';  //字符串
$b = 22;  //整型
$d = 3.14; //浮点型
$c = true; //布尔型
$x = null; //空类型
$a = "qushaobo";
++$b;
//输出
echo $a."他的年龄是：".$b;  //.连接运算符
//常量
define('PI',3.1415926);  //define定义
echo 'PI';  //PI 字符串
echo PI;   //3.14 常量



echo "<br>"."计算一个圆的周长和面积:"."<br>";
//计算周长
$r = 5; //半径
$length  =  2 * PI * $r;
$area = PI * $r * $r;
echo "周长是：".$length."，面积是：".$area;

//算术运算符 +  - * / %
//赋值运算符  =  += -= *= /= %= .=  $a+=5; 赋值运算符的左值必须是一个变量 $a = $a +5;  $a = $a -5;  $a = $a %5;
$a = 5;
echo "<br>".$a+=5;
echo "<br>".$a-=5;
echo "<br>".$a*=5;
echo "<br>".$a/=5;
echo "<br>".$a%=5;
$b = "hello";
echo  $b.="world";  //$b.="world"等价于 $b = $b."world";
echo "<br>";
//赋值运算符= &的区别
$a = "hello";
$b = $a;   //将$a的值赋值给$b
$c = &$a;  //将$a的引用赋值给$c
$a = "yasuo";   //当$a变化的时候，$c会跟着变
echo $b;
echo $c;






