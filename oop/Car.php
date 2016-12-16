<?php

/**
 * 面向对象三大特性:封装 继承
 */
//定义一个汽车类
class Car
{
    //通过构造函数，来初始化对象，使得对象在创建的时候就拥有某些属性
    //当对象实例化的时候 就一定会调用构造函数
    public function __construct($name,$color)
    {
        echo "对象实例化.....";
        $this->name = $name;
        $this->color = $color;
    }

    //定义一个属性 成员变量
    //public公共的 protected 受保护的 private私有的 访问权限修饰符
    private $name;  //定义一个私有的成员变量 外部不能够访问 一般提供对外公有的访问方法进行访问
    private $color;
    public function setName($name){  //成员方法
        $this->name = $name;  //内部能够访问私有成员变量
    }
    public function  getName(){
        return $this->name;
    }
    public function  setColor($color){
        $this->color = $color;
    }
    public function getColor(){
        return $this->color;
    }
    //定义一个方法
    public function start(){
        echo "车已经发动了...";
    }

    //析构函数 ，在对象销毁的时候创建
    public function __destruct()
    {
       echo "对象销毁了...";
    }
}

//用Car类 来实例化一个对象
//$car = new Car(); //空参构造函数实例化对象
$car = new Car("路虎","黑色");  //有参构造函数实例化对象
//echo $car instanceof Car;  //instanceof判断对象是否为类的实例
//调用$car对象的属性和方法
//使用setName方法设置名称
//$car->setName("luhu");
//$car->setColor("black");
echo $car->getName();
echo $car->getColor();
$car->start();


