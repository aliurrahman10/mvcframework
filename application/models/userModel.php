<?php

class userModel extends database{


	public function signup($username, $email, $password){

		
		if($this->Query("insert into users(username,email,password)values(?,?,?)",[$username,$email,$password])){
			return true;
		}else{
			return false;
		}
	}
}