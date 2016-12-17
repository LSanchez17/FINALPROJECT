<?php

class ManageProfileController extends Controller{


  protected $userObject;

  public function index(){
    $userObject = new Users();
    $this->set('task', 'update');
  }

  public function update(){
    if($_POST['password'] == $_POST['password2']){
      $this->userObject = new Users();

      $password = $_POST['password'];
      $passhash = password_hash($password, PASSWORD_DEFAULT);
 
      $data = array('first_name'=>$_POST['first_name'], 'last_name'=>$_POST['last_name'], 'email'=>$_POST['email'], 'password'=>$passhash);
      
      $this->userObject->updateUser($data);

      $this->set('message', 'Profile Updated!');
   }
   else{
     $this->set('message', 'Your passwords did not match');
   }
  }

}

?>
 