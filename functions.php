<?php
class functions
{
	public $connection;

	function __construct()
	{
		$this->connection  = connectDatabase();
		
	    

	}

	public function dbQuery()
	{
		$query  = sqlQueries::selectQuery;
	    $retval = mysqli_query($this->connection,$query);
	    return $retval;
	}

}