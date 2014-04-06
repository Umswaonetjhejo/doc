<?php
	Class DatabaseConnection
	{
		private dbConnection;
		
		public function connect()
		{
			$conn = $this->creatDbConnection();
			$this->setDbConnection();
			return $conn;
		}
		
		protected function creatDbConnection()
		{
			return mysql_connect("localhost");
		}
		
		private function setDbConnection($conn)
		{
			$this->dbConnection = $conn;
		}
	}
?>