<?php
	Class Product
	{
		private $prod_ID;
		private $prod_name;
		private $prod_manufacturer;
		private $prod_manufactured_date;
		
		function constructor($prod_name, $prod_manufacturer, $prod_manufactured_date)
		{
			$this->productID = $prod_ID;
			$this->name = $prod_name;
			$this->prodManufacture = $prod_manufacturer;
			$this->prodManuDate = $prod_manufactured_date;
		}
		
		
		function getProdID()
		{
			return $this->productID;
		}
		function getProdName()
		{
			return $this->name;
		}
		function getProdManufacturer()
		{
			return $this->prodManufacture;
		}
		function getProdManuDate()
		{
			return $this->prodManuDate;
		}
	}
?>