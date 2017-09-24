<?php
namespace Common\Model;
use Think\Model;
/**
* 公共模型
*/
class CommonModel extends Model
{
	//删除表
	final public function dropTable($tablename)
	{
		$tablename = C("DB_PREFIX").$tablename;
		return $this->query("DROP TABLE $tablename");
	}

	//读取所有表
	final public function listTable()
	{
		$tables = array();
		$data - $this->query("SHOW TABLES");
		foreach ($data as $k => $v) {
			$tables[] = $v['tables_in_'.strtolower(C("DB_NAME"))];//数据库默认tables_in_
		}
		return $tables;
	}

	//检查表是否存在
	final public function tables_exists($table)
	{
		$tables = $this->listTable();
		return in_array(C("DB_PREFIX").$table, $tables)?true:false;
	}

	//获取所有字段
	final public function get_fields($table)
	{
		$fields = array();
		$table  = C("DB_PREFIX").$table;
		$data = $this->query("SHOW COLUMNS FROM $table");
		foreach ($data as $k => $v) {
			$fields[$v['Field']] = $v['Type'];
		}
		return  $fields;
	}

	//检查字段是否存在
	final public function fields_exists($table,$field)
	{
		$fields = $this->get_fields($table);
		return 	array_key_exists($field,$fields);
	}

	protected function _before_write(&$data) {}
}


?>