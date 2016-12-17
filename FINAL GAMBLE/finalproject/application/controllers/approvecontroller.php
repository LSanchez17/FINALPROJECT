<?php

class ApproveController extends Controller{

   protected $userObject;
   
     public function index(){
         $userObject = new Users();
         $this->set('task', 'approve');     
     }

     public function approve(){
           $this->userObject = new Users();

           $data = array('email'=>$_POST['email']);
           
           $this->userObject->isApproved($data);
           $this->set('message', 'User Approved!');
     }
}