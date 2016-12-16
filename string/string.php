<?php
/**
 字符串
 */
//字符串长度
$love = 'I Love You';
echo strlen($love);  //10
//mb_strlen 中文字符串的长度
$str = '我爱你';
echo mb_strlen($str,"UTF8");  //3

//查找字符串
$str = 'What is your name?';
echo strpos($str,'name');

//截取字符串 mb_substr截取中文字符串
echo substr($love,2,4);
echo mb_substr($str,1,2,"utf8");

//替换字符串
$str = 'I Love Chian';
echo str_replace('Chian','China',$str);

//合并字符串
$arr = array('hello','world');
echo implode(',',$arr);  //js join

//字符串分割
$str = 'apple,banana,orange';
$res = explode(',',$str);  //js split
print_r($res);

//字符串转义
$str = "what's your name";
echo addslashes($str);
