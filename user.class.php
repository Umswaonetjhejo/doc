<?php
	Class User
	{
		private $user_id;
		private $user_name;
		private $user_email;
		private $user_password;
		
		function constructor($user_name, $user_email)
		{
			$this->userID = $user_id;
			$this->name = $user_name;
			$this->email = $user_email;
		}
		static function Password($user_password)
		{
			$this->password = $user_password;
		}
		
		function getUserID()
		{
			return $this->userID;
		}
		function getName()
		{
			return $this->name;
		}
		function getEmail()
		{
			return $this->email;
		}
		function getPassword()
		{
			return $this->password;
		}
	}
?>