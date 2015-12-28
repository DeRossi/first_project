<?php
	function d($value){
		echo "<pre>";
		print_r($value);
		echo "</pre>";
	}

	abstract class Human
	{
		/*public function __construct($NamThanhLap, $LinhVucHoatDong, $SoLuongTeam, $SoLuongNhanVien)
		{
			$this->_namthanhlap = $NamThanhLap;
			$this->_linhvuchoatdong = $LinhVucHoatDong;
			$this->_soluongteam = $SoLuongTeam;
			$this->_soluongnhanvien = $SoLuongNhanVien;
		}*/

		//abstract public function NamThanhLap();
		/*abstract public function LinhVucHoatDong($LinhVucHoatDong);
		abstract public function SoLuongTeam($soluongteam);
		abstract public function SoLuongNhanVien($soluongnhanvien);*/
	}

	//include("config.php");
	//mysqli_select_db($conn, "first_project");
	//$conn = mysqli_connect("localhost", "root", "first_project");

	class Students
	{
		private $Name;
		private $Age;
		private $Address;
		private $PhoneNumber;
		private $Height;
		private $Weight;

		function __construct($prName, $prAge, $prAddress, $prPhoneNumber, $prHeight, $prWeight) {
			$this->Name        = $prName;
			$this->Age         = $prAge;
			$this->Address     = $prAddress;
			$this->PhoneNumber = $prPhoneNumber;
			$this->Height      = $prHeight;
			$this->Weight      = $prWeight;
		}

		public function Xuat(){
			echo 'Name : ' .$this->Name. "<br>Age : " .$this->Age. "<br>Address : " .$this->Address. "<br>Phone : " .$this->PhoneNumber. "<br>Height : " .$this->Height. "<br>Weight : " .$this->Weight;
		}

		/*public function get_studentID($name){
			$sql = mysql_query('SELECT std_id FROM students WHERE std_name ="'.$name.'"');
			if(isset($sql) and mysql_num_rows($sql) > 0){
				$row = mysql_fetch_assoc($sql);
				return $row["std_id"];
			}
		}

		public function typeInfo(){
			?>
			<form action="/OOP/index.php" method="POST" role="form">
				<legend>Form Information</legend>
				<div class="form-group">
					<label for="">Name</label>
					<input type="text" class="form-control" id="txtName" name="txtName" placeholder="Input field">
					<label for="">Age</label>
					<input type="text" class="form-control" id="txtAge" name="txtAge" placeholder="Input field">
					<label for="">Address</label>
					<input type="text" class="form-control" id="txtAddress" name="txtAddress" placeholder="Input field">
					<label for="">PhoneNumber</label>
					<input type="text" class="form-control" id="txtPhone" name="txtPhone" placeholder="Input field">
					<label for="">Height</label>
					<input type="text" class="form-control" id="txtHeight" name="txtHeight" placeholder="Input field">
					<label for="">Weight</label>
					<input type="text" class="form-control" id="txtWeight" name="txtWeight" placeholder="Input field">
				</div>

				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
			<?
			echo("<pre>"); print_r($_POST); echo "</pre>";
			if($_POST){
				$name = $_POST["txtName"];
				$age = $_POST["txtAge"];
				$address = $_POST["txtAddress"];
				$phone = $_POST["txtPhone"];
				$height = $_POST["txtHeight"];
				$weight = $_POST["txtWeight"];
				$sql = "INSERT INTO students VALUES ('', '$name', '$address', '$phone', '$age', '$height', '$weight')";

				$conn = mysqli_connect("localhost", "root", "", "first_project");
				if(mysqli_query($conn, $sql)){
					echo "Record added";
				} else{
					echo "Error !!";
				}
			}

		}

		public function Insert_DB($name, $age, $address, $phone, $height, $weight){
			//global $

		}

		public function showInfo($name, $age, $address, $phone, $height, $weight){
			$this->Name = $name;
			$this->Age = $age;
			$this->Address = $address;
			$this->PhoneNumber = $phone;
			$this->Height = $height;
			$this->Weight = $weight;
			echo "Tôi tên là : {$this->Name}\n";
			echo "Năm nay tôi : {$this->Age} tuổi\n";
			echo "Địa chỉ nhà : {$this->Address}\n";
			echo "Số Phone : {$this->PhoneNumber}\n";
			echo "Chiều cao : {$this->Height}\n";
			echo "Cân nặng : {$this->Weight}\n";
		}

		public function Set_value($id,$fullname,$age,$city){
			$this->id = $id;
			$this->fullname = $fullname;
			$this->age = $age;
			$this->city = $city;
		}*/
	}
?>