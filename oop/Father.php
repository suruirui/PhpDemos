<?php

//定义一个类作为父类
class Father
{
    public function __construct()
    {
        echo "父类的构造函数调用了...";
    }

    public  $name;
    private $money;
    protected $car;

    public function run(){
        echo "run.....";
    }
}

//定义子类 继承父类
//子类对象在实例化的时候 会默认调用父类的构造函数 ，如果定义构造函数则会覆盖父类的构造函数
class Child extends Father{ // extends继承
//        public function __construct()
//        {
//            echo "子类的构造函数调用了....";
//        }
    //子类覆盖 override 父类的方法
    public function run()
    {
        parent::run();//parent表示父类的引用
        echo "child run....";
    }
}
//实例化一个子类对象 子类只能访问父类的公有的成员
$child = new Child();
$child->run();
