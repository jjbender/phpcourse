<?php

class AccountModel extends BaseModel {
    
    private $salt = "efsesfs";
    public function isAuthed()
    {
        $db =$this->connection();
        if (!isset($__SESSION['user_id'])) {
            return false;
        }
    $userId= $_SESSION['user_id'];
    
    $user = $this->GetUserById($user_id);
        if($user === false) {
            return false;
        }
        return true;
    }
        
   /* $stmt = $db->prepare("Select * FROM `users` WHERE `id` = :id");
    $stmt->execute(['id' => $userId]);
    if ($stmt->rowCount()==1) {
        return true;
    }
        
     return false;   
     
     */
        
    
    
    public function getUserById($id)
    {
        $db = $this->connection();
        $user = $db->prepare("SELECT * FROM `users` WHERE `id` =:id");
        $user->execute(['id'=> $id]);
        
        if($user->rowCount() == 1){
            return $user->fetch();
        }
    return false;
    }
    
    
    public function getUserByLoginPassword($login,$password)
	{
		$db = $this->connection();
		$user = $db->prepare("SELECT * FROM `users` WHERE `login` = :login AND `password` = :password");
		$user->execute(['login' => $login, 'password' => 
                        $this->hashPassword($password)]);
		
		if($user->rowCount() == 1) {
			return $user->fetch();
		}
		
		return false;
	}
	
	public function getUserByLogin($login)
	{
		
		$db = $this->connection();
		$user = $db->prepare("SELECT * FROM `users` WHERE `login` = :login");
		$user->execute(['login' => $login]);
		
		return $user->rowCount();
	}
	
	private function hashPassword($pass) 
	{
		return md5($pass . $this->salt);
	}
	
	public function registerUser($login,$password)
	{
		$db = $this->connection();
		$user = $db->prepare("INSERT INTO `users` (`login`,`password`) VALUES (:login, :password)");
		$user->execute(['login' => $login, 'password' => $this->hashPassword($password)]);
		
		return $db->lastInsertId();
	}


}
   /* Другой способ
   
        public function findByLoginPassword($login,$password)
		{
			$db = $this->connection();
			$password = $this->encryptPass($password);

			$stmt = $db->prepare("SELECT * FROM `users` WHERE `name` = :login AND `pass` = :password");
			$stmt->execute(['login' => $login, 'password' => $password]);

			if($stmt->rowCount() == 1)
			{
				return $stmt->fetch();
			}

			return false;
		}

    public function encryptPass($pass)
		{
			return md5($pass . $this->salt);
		}


	}	*/