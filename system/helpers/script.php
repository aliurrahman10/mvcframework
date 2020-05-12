<?php

function linkJS($linkPath){
	$url = BASE_URL."/".$linkPath;
	echo '<script src="'.$url.'"></script>';
}

?>