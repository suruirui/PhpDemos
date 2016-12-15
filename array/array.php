<?php
/**
 * 数组
 */

//定义一个索引数组
//$arr = array();
//$arr[0] = "苹果";
//$arr[1] = "香蕉";

$arr = array("香蕉","苹果","橘子");  //定义数组 并确定元素
var_dump($arr);
//echo  "数组的长度是：".sizeof($arr).count($arr); //sizeof() count()
echo "<br>";
//遍历一个索引数组 使用for循环
for($i =0; $i<sizeof($arr);$i++){
    echo $arr[$i];
}
//使用foreach遍历索引数组
foreach ($arr as $i){
    echo $i;
}

echo "<br>";
/**
 * 定义一个关联数组  学号对应学生姓名
 */
$arr = array(
    "001" => "Jack",
    "002" => "Rose",
    "003" => "Tom"
);
var_dump($arr);
//读取数组元素
echo $arr["002"];
//echo $arr["004"];
//增加新的数组元素
$arr["004"] = "Jerry";
echo $arr["004"];
//修改数组元素
$arr["001"] = "Lisi";
echo "<br>";

//删除数组元素
unset($arr["001"]);
var_dump($arr);

//遍历关联数组
foreach($arr as $k=>$v){  // key键 value值  键值对
    echo $k."-".$v."<br>";
}






