<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Oracledb {

	protected $CI;

	public function __construct(){
		$this->CI =& get_instance();
	}

	public function get_where($table = FALSE, $where = FALSE, $limit = FALSE, $offset = FALSE, $orderby = FALSE){
		if(!$table || !$where)return FALSE;
		$sql = "SELECT * FROM {$table} WHERE {$where} ";
		if($limit)$sql.="AND ROWNUM {$limit} ";
		if($orderby)$sql.="ORDER BY {$orderby} ";
		return $sql;
	}

	public function select($table = FALSE, $fields = FALSE, $where = FALSE, $limit = FALSE, $offset = FALSE, $orderby = FALSE ){
		if(!$table)return FALSE;
		if(!$fields)$fields = "*";		
		$sql = "SELECT {$fields} FROM {$table} ";
		if($where)	$sql.= "WHERE {$where} ";
		if($limit){
			if(!$where)$sql.= "WHERE ";
			$sql.= "ROWNUM <= {$limit} ";
		}			
		if($orderby)$sql.= "ORDER BY {$orderby} ";
		return $sql;
	}

	public function paginate($sql = FALSE, $fields = FALSE, $limit = 0, $offset = 0){		
		if(!$sql || !$fields)return FALSE;
		$temp = "SELECT {$fields} ";
		$temp.= "FROM (SELECT {$fields}, rownum AS rnum ";
		$temp.= "FROM ({$sql}) WHERE rownum <= {$limit} ) ";
		$temp.= "WHERE rnum > {$offset} ";
		return $temp;
	}
	
	public function insert($table = FALSE, $data = FALSE,$where = FALSE){
		if(!$table || !$data)return FALSE;
		foreach ($data as $key => $value){
			if(validar_fecha($value)){
				$date = new DateTime($value);
				$date = $date->format('d-m-Y');
				$data[$key] = "TO_DATE('".$date."','DD/MM/YY')";
			}else if($value == 'TIMESTAMP'){
				$data[$key] = "TO_DATE('".date('d-m-Y H:i:s')."','DD/MM/YYYY HH24:MI:SS')";
			}else if(!is_numeric($value)){
				$data[$key] = "'".$value."'"; 
			}
		}		
		$fields = implode(",", array_keys($data));
		$values = implode(",", array_values($data));

		$sql = "INSERT INTO {$table}({$fields}) VALUES({$values})";
		if($where)$sql.=" WHERE ".$where;		
		return $sql;
	}

	public function batch_insert($table = FALSE, $fields = FALSE, $values = FALSE){
		if(!$table || !$fields || !$values)return FALSE;
		$sql = "INSERT ALL ";
		foreach($values as $val){
			$temp = $val;
			foreach ($temp as $k => $v) {
				if(validar_fecha($v)){
					$date = new DateTime($v);
					$date = $date->format('d-m-Y');
					$temp[$k] = "TO_DATE('".$date."','DD/MM/YY')";
				}else if($v == 'TIMESTAMP'){
					$temp[$k] = "TO_DATE('".date('d-m-Y H:i:s')."','DD/MM/YYYY HH24:MI:SS')";
				}else if(!is_numeric($v)){
					$temp[$k] = "'".$v."'";
				}
			}
			$temp = implode(",", $temp);
			$sql.= "INTO {$table} ({$fields}) VALUES ({$temp}) ";
		}
		$sql.= "SELECT * FROM DUAL ";
		return $sql;
	}

	public function update($table = FALSE, $data = FALSE, $where = FALSE){
		if(!$table || !$data || !$where)return FALSE;
		$fields = "";
		foreach ($data as $key => $value){
			if(strtotime($value)){
				$date = new DateTime($value);
				$date = $date->format('d-m-Y');
				$data[$key] = "TO_DATE('".$date."','DD/MM/YY')";			
			}else if(!is_numeric($value)){
				$data[$key] = "'".$value."'"; 
			}

			$fields.=$key." = ".$data[$key].",";
		}
		$fields = rtrim($fields, ",");
		$sql = "UPDATE {$table} SET {$fields} ";
		if($where)$sql.="WHERE ".$where;		
		return $sql;
	}

	public function delete(){

	}
}
