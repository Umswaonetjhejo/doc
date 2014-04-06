<?php
	Class Order
	{
		private $order_ID;
		
		function constructor($order_ID)
		{
			$this->orderID = $order_ID;
		}
		
		function getOrder()
		{
			return $this->orderID;
		}
	}
?>