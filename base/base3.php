<?php
/**
 * 语句
 */
//判断语句
$age = -1;
if($age<18){
    echo "你还未成年";
}elseif ($age >= 18 && $age <30 ){
    echo "你该找对象了";
}elseif ($age >=30 && $age < 40){
    echo "你即将步入中年";
}else if($age >=40 && $age < 50){
    echo "你已经成熟了";
}else if($age >= 50 && $age <60){
    echo "该退休了";
}else{
    echo "安享晚年";
}

//分支语句
$weekday = 8;
switch ($weekday){
    case 1:
        echo  "今天是星期一";
        break;
    case 2:
        echo "今天是星期二";
        break;
    case 3:
        echo "今天是星期三";
        break;
    case 4:
        echo "今天是星期四";
        break;
    case 5:
        echo "今天是星期五";
        break;
    case 6:
        echo "今天是星期六";
        break;
    case 7:
        echo "今天是星期日";
        break;
    default:
        echo "没有对应的星期";
}

//循环
//求1-100的数的和
$num = 1;
$sum = 0;
//while循环
//while($num <= 100){
//    $sum += $num;
//    ++$num;
//}

//do..while循环
//do{
//    if($num %2 == 0) {
//        $sum += $num;
//        var_dump($num);
//    }
//    $num++;
//}while($num <= 100);
//echo "1-100之间所有偶数的和是:".$sum;

//for循环  迭代数组 遍历数组的时候

for($i = 1;$i<=100;$i++){
    $sum += $i;
}
echo "1-100之间所有整数的和是:".$sum;

echo "<br>";
//打印三角形
for($i=0;$i<5;$i++){   //外层循环控制有多少行 决定了行数
    for($j = 0;$j <$i+1;$j++){  //内层循环控制每行的个数，个数的特点是等于行数
            echo "*";
    }
    echo "<br>";
}

//*
//**
//***
//****
//*****

//99乘法表
for($i = 1;$i <=9;$i++){  //打印9行
    for($j =1; $j< $i+1;$j++){
        echo  $j.'*'.$i.'='.($i*$j)."&nbsp;&nbsp;";
    }
    echo "<br>";
}



