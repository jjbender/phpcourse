<?php


abstract class User
{
    
    protected $id = 'unknow';
    protected $login = 'unknow';
    
    public function __construct($id)
    {
       $this ->id=$id;
       static::checklogin($login);     
    }
    
    abstract protected function Checklogin();        
    public function whoareyou()
        {
        echo $this->id."-имя твое";
    }
}

class Admin extends User
{
    protected $code='ISO2333549';
    protected function Checklogin()
        { 
            if (login=="админ")
                {
                $this->login=$login;
                }
        }
    function whoareyou()
        { 
        Parent::whoareyou();
        echo ("<br>");
        echo ("вы являетесь администратором");
        }
    public function adminrights($code)
    {
        echo $this->code;
    }
}


class Guest extends User
    {
    protected function Checklogin()
        { 
            if (login=="гость")
                {
                $this->login=$login;
                }
        }
    function whoareyou()
        { 
        Parent::whoareyou();
        echo ("<br>");
        echo ("вы являетесь гостем сайта");
        }
}
    




$Adminchecksin =new Admin('nagibator99999','админ');
$Adminchecksin->whoareyou();
$Adminchecksin->adminrights($code);

echo "</br>";
echo "</br>";

$Guestchecksin =new Guest('sunshine','гость');
$Guestchecksin->whoareyou();

