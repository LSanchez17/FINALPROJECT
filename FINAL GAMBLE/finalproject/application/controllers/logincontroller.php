<?php

class LoginController extends Controller{

   protected $userObject;
   
   public function do_login() {
       //handle login
      

       $this->userObject = new Users();
       if($this->userObject->isActive($_POST['email']))
       {
       if($this->userObject->checkUser($_POST['email'],$_POST['password'])) 
       {
          

          $userInfo = $this->userObject->getUserFromEmail($_POST['email']);

          $_SESSION['uID'] = $userInfo['uID'];
          
            if(strlen($_SESSION['redirect']) > 0 ) 
            {
                $view = $_SESSION['redirect'];
                unset($_SESSION['redirect']);
                header('Location: '.BASE_URL.$view);
            }
            else 
            {
                header('Location: '.BASE_URL);
            }
       }
       else 
       {
           $this->set('error','Wrong password / email combination');
       }
       }
       else
       {
          echo "<div style='text-align: center'><h1> Your account is pending approval!</h1></div>";  
       }
  }

    public function logout() {

    //unset the session id
        unset($_SESSION['uID']);

    // close the session
        session_write_close();

    // send to the homepage
        header('Location: '.BASE_URL);

    }
	
}