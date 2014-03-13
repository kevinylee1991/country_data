<?php
	class Database
	{
		var $connection;
		public function __construct()
		{
			define('DB_HOST', 'localhost');
			define('DB_USER', 'root');
			define('DB_PASS', ''); //set DB_PASS as 'root' if you're using mac
			define('DB_DATABASE', 'world'); //make sure to set your database
			$this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_DATABASE);

		}

		public function fetch_all($query)
		{
			$data = array();
			$result = $this->connection->query($query);
			while($row = mysqli_fetch_assoc($result))
			{
				$data[] = $row;
			}
			return $data;
		}

		public function fetch_record($query)
		{
			$result = $this->connection->query($query);
			return mysqli_fetch_assoc($result);
		}

		public function run_mysql_query($query)
		{
		 	$result = $connection->query($query);
		 	return $this->connection->insert_id; //returns id of what you just changed
		}

		function escape_this_string($string)
		{
			return $this->connection->mysql_real_escape_string($string);
		}
	}
?>