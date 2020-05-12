<?php

function linkCSS($linkPath){
	$url = BASE_URL."/".$linkPath;

	echo '<link rel="stylesheet" href="'.$url.'">';
}

?>