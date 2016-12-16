<?php
/**
 * 数组中的方法
 */

$students = array("Jack", "Rose", "Tom", "Yasuo");
$student = each($students);
var_dump($student);
echo $student['key'].' - '.$student['value'];

//使用each结合list遍历数组
while(list($k,$v) = each($students)){
    echo $k.' - '.$v;
}
//关联数组
$books = array(
    "射雕英雄传" => "金庸",
    "西游记"=> "吴承恩",
    "红楼梦"=>"曹雪芹",
    "水许传"=> "施耐庵"
);
//使用each结合list遍历数组
while(list($k,$v) = each($books)){
    echo  '<br>'.$k.' - '.$v;
}

//数组排序 sort
$ages = array(20,19,23,18);
print_r($ages);
sort($ages);
print_r($ages);

//使用asort() 和ksort()对关联数组进行排序
$heros = array(
    "1" => "Akali",
    "2" => "Bulong",
    "3" => "VN",
    "4" => "Ruiwen"
 );

//使用asort()按照值进行排序
print_r($heros);
asort($heros);
print_r($heros);

//使用ksort(）按照键进行排序
print_r($heros);
ksort($heros);
print_r($heros);


