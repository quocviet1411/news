<?php 
	/**
	* 
	*/
	include('database.php');
	class Home_model extends database
	{
		
		public function getSlide()
		{
			$sql="SELECT * FROM slide";
			$this->setQuery($sql);
			return $this->loadAllRows();
		}
	}
 ?>