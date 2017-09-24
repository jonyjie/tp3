<?php

function tp_password($val,$pass){
	$val = md5(md5($val).C('PWD_PREFIX'));
	if ($val == $pass) {
		return true;
	}else{
		return false;
	}
}

function checkName($name){
		
	$name =trim($name);
	if(empty($name)){		
		return false;
	}else{
		return true;
	}
}

function passwords($val){
	$pass = trim($val);
	if (empty($pass)) {
		return false;
	}else{
		return true;
	}
}




?>