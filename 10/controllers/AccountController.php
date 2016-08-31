<?php

    class AccountController extends BaseController
{
        public function index()
        {
            
            $this->LoadModel('Account');
           
            $model = new AccountModel();
           
            if ($model->isAuthed() === true) {
            
                $this->redirectToAction ('index','home');
            }
            
            $data['token'] = $this->makeToken();
            $this->LoadPage('authReg',$data);
        }
        
                
        
        
        public function login()
        {
            $this->loadModel('Account');
            $model = new AccountModel();
            
            if($user = $model->getUserByLoginPassword($_POST['login'],$_POST['password']))
            {
			$_SESSION['user_id'] = $user['id'];
			$this->redirectToAction('index','home');
		      }
		
		$data['token'] = $this->makeToken();
		$data['error'] = 'Incorrect login/pass';
		$data['action'] = 'index.php?action=account&method=login';
		$this->LoadPage('authReg',$data);
        }
        
        
        public function register()
	{
		$data['token'] = $this->makeToken();
		$data['action'] = 'index.php?action=account&method=regSave';
		$this->LoadPage('authReg',$data);
        
    }
        public function regSave()
        {
            $this->loadModel('Account');
            $model = new AccountModel();
            if ($model->getUserByLogin($_POST['login']) > 0) {
                $this->redirectToAction('register','action');
            }
            else{
                if($id = $model->registerUser($_POST['login'],$_POST['password'])) {
				$_SESSION['user_id'] = $id;
				$this->redirectToAction('index','home');
			}
			
			$data['token'] = $this->makeToken();
			$data['action'] = 'index.php?action=account&method=regSave';
			$data['error'] = 'Error';
			$this->LoadPage('authReg',$data);
		      }
	   }
            
        
        
        
        
        /*public function authorize()
        {
            if ($_SERVER['REQUEST_METHOD'] == 'POST' && 
                $this->checkToken($_POST['token'])){
					
					$this->LoadModel('Account');
					$model = new AccountModel();
					$user = $model->findByLoginPassword($_POST['login'], $_POST['password']);

					if($user === false){
						$this->redirectToAction('index', 'home');
					}

					$_SESSION['user_id'] = $user['id'];
					$this->redirectToAction('index', 'home');
        }
        
        
        */
        
        public function logout()
        {
            unset($_SESSION['user_id']);
            $this->redirectToAction('index','account');
        }      
}