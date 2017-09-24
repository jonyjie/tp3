<?php
/**
* 通用的树类型
*/
class Tree
{
	
	
	public $arr = array();
	public $icon = array('|','├','└');
	public $nbsp = "&nbsp;";

	public $ret = "";

	public $aras = array();

	function init($arr)
	{
		$this->arr = $arr;
		$this->ret = '';
        return is_array($arr);
	}

	public function get_parent($pid)
	{
		$arr =array();
		foreach ($this->arr as $k => $v) {
			if($v['id'] == $pid){
				$arr['id'] = $v['id'];
				$arr['pid'] = $v['parentid'];
			}
		}
		return $arr;
	}

	public function get_child($pid)
	{
		$arrs = array();
		foreach ($this->arr as $k => $v) {
			if($v['parentid'] == $pid){
				$arrs[$k] = $v;
			}
		}
		return $arrs;
	}

	public function get_tree($myid=0)
	{		
		$childs = $this->get_child($myid);				
		foreach ($childs as $k => &$v) {			
			if (is_array($v) && !empty($v) ) {		
				$v['child'] = $this->get_tree($v['id']);				
			}			
		}		
		return $childs;
	}

	public function get_tree_str($myid, $str, $sid = 0, $adds = '', $str_group = '') {
        $number = 1;
        //一级栏目
        $child = $this->get_child($myid);
        if (is_array($child)) {
            $total = count($child);
            foreach ($child as $id => $value) {
                $j = $k = '';
                if ($number == $total) {
                    $j .= $this->icon[2];
                } else {
                    $j .= $this->icon[1];
                    $k = $adds ? $this->icon[0] : '';
                }
                $spacer = $adds ? $adds . $j : '';
                $selected = $id == $sid ? 'selected' : '';
                @extract($value);
                $parentid == 0 && $str_group ? eval("\$nstr = \"$str_group\";") : eval("\$nstr = \"$str\";");
                $this->ret .= $nstr;
                $nbsp = $this->nbsp;

                $this->get_tree_str($id, $str, $sid, $adds . $k . $nbsp, $str_group);
                $number++;
            }
        }
        return $this->ret;
    }
	

	public function fenzu()
	{
		$arr = array();
		$tree = $this->get_child(0);
		foreach ($tree as $k => $v) {
			$arr = $this->get_tree($v['id'],0);			
		}

		return $arr;
	}

	




	



	

}

?>