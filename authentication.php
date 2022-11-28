<?php
include 'config.php';
class authentication extends config{
		
		private $uname;
		private $upass;
		public function __construct($name,$pass){
			$this->uname=$name;
			$this->upass=$pass;
		}

		public function login(){
			//Creates connection to database
			$connection = new mysqli($this->DB_SERVER, $this->DB_USERNAME, $this->DB_PASSWORD, $this->DB_NAME);
			if($connection->connect_error){
				die("Connection failed: ".$connection->connect_error);
			}
			//Creates session for session variables
			session_start();
			$_SESSION["err"] = false;
			
			//Select query for databse from user table
			$sql = "SELECT * FROM users WHERE uname = '$this->uname'";
			$result = $connection->query($sql);

			//Test weather user exists
			if($result->num_rows > 0){
				//exists
			}else{
				$_SESSION["err"] = true;
				return 0;
			}

			//Test if password is correct for user
			$row = $result->fetch_assoc();
			if($row['Password'] == $this->upass){
				$_SESSION["uid"] = $row["id"];
				$_SESSION["Username"] = $row["Username"];
			}else{
				$_SESSION["err"] = true;
				return 0;
			}

			$connection->close();
			//redirect to different page after login
			header("Location: success.php");
		}

		public function createUser(){
		//Creates connection to database
		$connection = new mysqli($this->DB_SERVER, $this->DB_USERNAME, $this->DB_PASSWORD, $this->DB_NAME);

		//Insert query for database to user table
		$sql = "INSERT INTO users (FirstName,LastName,Username, Password, EmailAddress) VALUES (
			'{$connection->real_escape_string($_POST['fname'])}',
			'{$connection->real_escape_string($_POST['lname'])}',
			'{$connection->real_escape_string($this->uname)}',
			'{$connection->real_escape_string($this->upass)}',
			'{$connection->real_escape_string($_POST['email'])}')";
			$insert = $connection->query($sql);
			$connection->close();

			//redirect to login page after account is created
			header("Location: login.php");
		}
	}
?>