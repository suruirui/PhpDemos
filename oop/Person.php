<?php

/**
 * 面向对象回顾
 */
class Person
{
    //构造函数  对象实例化的时候调用
    public function __construct($name,$age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    //成员变量 访问权限修饰符 public 公共的  > protected受保护的  >  private 私有的 封装
    //封装的好处：私有数据，对外提供访问set/get方法
    //field字段(类的成员变量另外一种说法)
    private $name;
    private $age;
    //静态的 static  不用创建对象的实例，可以直接用类名调用
    public static $nation = "China";
    public static function run(){
        echo "跑步....";
    }
    //在静态成员方法内部只能调用静态成员
    public static function travel(){
        echo "你拥有".self::$nation."的国籍";
    }
    //?在静态成员方法内 能不能调用非静态成员?
    //答案是不能：  静态成员，也叫类成员。随着类的加载而加载，类的创建是优先于对象
    //而 非静态成员是要由对象去调用的

    //set/get  method 成员方法
    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function setAge($age){
        $this->age = $age;
    }
    public function getAge(){
        return $this->age;
    }

    public function eat(){
        echo "吃饭....";
    }

    //析构函数 销毁对象的时候调用
    public function  __destruct()
    {
       echo "对象被销毁了";
    }
}

//创建 实例化一个对象
////$person = new Person();
//$person->setName('lisi');
//$person->setAge(20);
//echo "姓名：".$person->getName()."年龄是：".$person->getAge();

//使用有参构造实例化一个对象
$person2 = new Person("张三",10);
echo "国籍是：".Person::$nation;  //静态成员(方法和变量)直接用类名调用
Person::run();
Person::travel();
$person2->eat();
var_dump($person2);



