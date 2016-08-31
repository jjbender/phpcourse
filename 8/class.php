<?php


abstract class Human
{
    
    public $name='unknow';
    protected $sex = 'unknow';
    
    public function __construct($name)
    {
        $this ->name=$name;
        static::setSex($sex);
    }
    
    abstract protected function setSex();
       
    public function greeting()    
    {
        echo "Добрый день, ".$this->name." !"; 
    } 
}

class Man extends Human
{
    function greeting()
    {
        parent::greeting();
        echo "МУЖИИИИИК";
        
    }
    protected function setSex()
        {
            $this->sex='мужик';
        }
    
}

class Woman extends Human
{
    function greeting()
    {
        parent::greeting();
        echo "НЕ МУЖИИИИИК";
    }
    
    protected function setSex()
    {
        $this->sex='девочка';
    }
}


$personMale =new Man('Петя','мужик');
$personMale->greeting();

echo "</br>";

$personFemale =new Woman ('Настя','девушка');
$personFemale->greeting();

echo "</br>";

$personUnknown =new Man ('Вася','девушка');
$personUnknown ->greeting();



/* Class MyfirstCLass

{
    public $someProp = 'laaaaaaa';
    function __construct()
    {
        echo "LABUDA";
    }
    
}

$myObject = new Myfirstclass();
    
{
	Public $someProp;
	function myMEthod()
{
echo "Hello".$this->someProp;
}
    
    function setProp ($myProp)
    {
    $this->someProp=$myProp;
    }
}

$myObject = new MyFirstCLass();
$myObject -> someProp = ', Vasya';
$myObject -> myMethod();



$person = new Human('Петя');

*/