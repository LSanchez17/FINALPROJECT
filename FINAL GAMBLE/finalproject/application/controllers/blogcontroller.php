<?php

class BlogController extends Controller{
	
	public $postObject;
  
   	public function post($pID){
        $this->postObject = new Post();
		$post = $this->postObject->getPost($pID);
	  	$this->set('post',$post);
   	}
	
	public function index(){
		$this->postObject = new Post();
		$posts = $this->postObject->getAllPosts();
		$this->set('title', 'The Default Blog View');
		$this->set('posts',$posts);
	}
	
        public function commentsubmitted(){
                $this->postObject = new Users();

                $data = array('first_name'=>$_POST['first_name'], 'email'=>$_POST['email'], 'comment'=>$_POST['comment']);
                $this->postObject->submitComment($data);
                $this->set('message', 'Comment Submitted');

        }
}

?>