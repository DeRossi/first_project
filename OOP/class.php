<?php
	function d($value){
		echo "<pre>";
		print_r($value);
		echo "</pre>";
	}

	class Students
	{
		private $Name;
		private $Age;
		private $Address;
		private $PhoneNumber;
		private $Height;
		private $Weight;

		function __construct() {

		}

		public function setStudent($prName, $prAge, $prAddress, $prPhoneNumber, $prHeight, $prWeight){
			$this->Name        = $prName;
			$this->Age         = $prAge;
			$this->Address     = $prAddress;
			$this->PhoneNumber = $prPhoneNumber;
			$this->Height      = $prHeight;
			$this->Weight      = $prWeight;
		}

		public function getStudent(){
			echo 'Name : ' .$this->Name. "<br>Age : " .$this->Age. "<br>Address : " .$this->Address. "<br>Phone : " .$this->PhoneNumber. "<br>Height : " .$this->Height. "<br>Weight : " .$this->Weight;
		}
	}
?>