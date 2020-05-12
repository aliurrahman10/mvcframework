<?php

class rout
{

	// Default controller,method and parameters

	public $controller = "welcome";
	public $method = "index";
	public $params = [];




	public function __construct(){



		$url = $this->url();

		if(!empty($url)){
			if(file_exists("../application/controllers/".$url[0].".php")){
				$this->controller = $url[0];
				unset($url[0]);
			}else{
				echo "Controller not found";
				exit;
			}


		}
		require_once "../application/controllers/". $this->controller .".php";
		$this->controller = new $this->controller;


		if(isset($url[1]) && !empty($url[1])){
			if(method_exists($this->controller, $url[1])){
				$this->method = $url[1];
				unset($url[1]);
			}else{
				echo "Method not exist";
			}
		}






		if(isset($url)){
			$this->params = $url;
		}else{
			$this->params = [];
		}

		call_user_func_array([$this->controller, $this->method], $this->params);

		}

	


	public function url(){
		if(isset($_GET['url'])){
			$url = $_GET['url'];
			$url = rtrim($url);
			$url = filter_var($url, FILTER_SANITIZE_URL);
			$url = explode("/", $url);
			return $url;
		}
	}





}