<?php 
	
	CLass sqlExec {

		private function dbConnect(){
			$dbhost = "localhost";
			$dbuser = "root";
			$dbpass = "";
			$db = "infosys";
			 
			$conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
			return $conn;
		}

		public function dbClose($conn){
			$conn->close();
		}

		public function dbOpen(){
			$conn = $this->dbConnect();
			return $conn;
		}

		//CUD = Create, Update, Delete
		public function dbCUD($sql){
			$conn = $this->dbConnect();
			if ($conn->query($sql) === TRUE) {
				 return $conn->insert_id;		   
			} else {
			    echo "Error: " . $sql . "<br>" . $conn->error;
			}
			
			$this->dbClose($conn);
			
		}

		//R = Read or SELECT database
		public function dbSelect($sql){
			$conn = $this->dbConnect();
			$ResArray = array();	
			$result = $conn->query($sql);

			if ($result->num_rows > 0) {
				while($row =$result->fetch_assoc()) {
			        $ResArray[] = $row;
			    }
			    return json_encode($ResArray);
			} else {
				return "No Data";
			}
			$this->dbClose($conn);
		}

		

	}

?>