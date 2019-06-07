<?php
class Model {
	private $connection;
	public function __construct()
	{
		global $config;
		
		$this->connection = new mysqli($config['db_host'], $config['db_username'], $config['db_password'],$config['db_name']) or die('MySQL Error: '. mysql_error());
	}
	public function escapeString($string)
	{
		return $this->connection->real_escape_string($string);
	}
	public function escapeArray($array)
	{
	    array_walk_recursive($array, create_function('&$v', '$v = mysql_real_escape_string($v);'));
		return $array;
	}
	
	public function to_bool($val)
	{
	    return !!$val;
	}
	
	public function to_date($val)
	{
	    return date('Y-m-d', $val);
	}
	
	public function to_time($val)
	{
	    return date('H:i:s', $val);
	}
	
	public function to_datetime($val)
	{
	    return date('Y-m-d H:i:s', $val);
	}
	
	public function query($qry)
	{
		$result = mysqli_query($this->connection,$qry) or die('MySQL Error: '. mysqli_error($this->connection));
		$row = mysqli_fetch_array($result);
		return $row;
	}

	public function queryAll($qry)
	{
		$result = mysqli_query($this->connection,$qry) or die('MySQL Error: '. mysqli_error($this->connection));
		$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
		return $row;
	}



	public function queryInsert($qry)
	{
		$result = mysqli_query($this->connection,$qry) or die('MySQL Error: '. mysqli_error($this->connection));
		
	}


	public function execute($qry)
	{
		$exec = mysqli_query($this->connection,$qry) or die('MySQL Error: '. mysqli_error($this->connection));
		$count = mysqli_affected_rows($this->connection);
		return $count;
	}
    
}
?>