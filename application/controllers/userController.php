<?php


class userController extends framework
{
	
	public function index(){
	
		$this->helper("link");
		$this->helper("script");
		
		$this->view("userView");

	}

	public function userSignUp(){

		$mymodel = $this->model("userModel");


		$username = $this->input("username");
		$email    = $this->input("email");
		$password = $this->input("password");

		if($mymodel->signup($username, $email, $password)){
			echo "Success!";
		}else{
			echo "Error!";
		}
		

		
		
	}



}