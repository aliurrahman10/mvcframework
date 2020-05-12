<?php

class framework{

	public function view($viewName, $data = []){
		if(file_exists("../application/views/".$viewName.".php")){
			require_once "../application/views/".$viewName. ".php";
		}else{
			echo "View page not found";
		}
	}


	public function model($modelName){
		if(file_exists("../application/models/".$modelName.".php")){
			require_once '../application/models/'.$modelName. ".php";
			return new $modelName;
	}else{
		echo "model not foun";
	}
	}

	public function input($inputname){
		if($_SERVER['REQUEST_METHOD'] == "POST" || $_SERVER['REQUEST_METHOD'] == "post"){

			return $_POST[$inputname];

		}else if($_SERVER['REQUEST_METHOD'] == "GET" || $_SERVER['REQUEST_METHOD'] == "get"){
			return $_GET[$inputname];
	    }

	}

	public function helper($helpername){
		if(file_exists("../system/helpers/".$helpername.".php")){
			require_once "../system/helpers/".$helpername.".php";
		}
	}

}