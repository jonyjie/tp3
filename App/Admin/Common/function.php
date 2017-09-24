<?php
function getmenu($pid=0)
{
	return $list;
}

function changeAarr($arr)
{
	if(is_array($arr)){
		foreach ($arr as $k => &$v) {
			
		}
	}else{
		return $arr;
	}
}

function _is_check($id,$arr)
{
	if(in_array($id, $arr)){
		return true;
	}else{
		return false;
	}
}

function _get_level($id,$arr=array(),$i=0)
{		
	if($arr[$id]['parentid'] == 0 || $arr[$id]['parentid'] == $id){
		return $i;
	}else{
		$i++;
		return _get_level($arr[$id]['parentid'],$arr,$i);
	}
	
}



?>