<?php
interface Audible
{
    public function makeSound();
}

interface Switchable
{
    public function turnOn();
    public function turnOff();
}

class Computer implements Switchable, Audible
{
    public function turnOn()
    {
        echo "Computer is turned on";
    }
    public function turnOff()
    {
        echo "Computer is turned off";
    }
    public function makeSound()
    {
        echo "Computer made a sound";
    }
}

class Cat implements Audible
{
    public function makeSound()
    {
        echo "Cat made a sound";
    }
}

$computer=new Computer();
$cat=new Cat();
$computer -> makeSound();
$cat -> makeSound();
