<?php
	class Database1 {

        private $dbname;
        private $user;
        private $server;
		private $pass;
		private $conn;
		
        public function __construct($server, $user, $pass, $dbname) {
            $this->server = $server;
			$this->user= $user;
			$this->pass = $pass;
            $this->dbname = $dbname; 
            $this->conn = mysqli_connect($this->server, $this->user, $this->pass, $this->dbname);  
		}
        public function insert($table, $data) {
            if (!($this->conn)) {
                die ("Cannot connect to".$this->server." using ".$this->user);
            } else {
				$column = "";
				$val = "";
				
				foreach($data as $key=>$value){
					$column=$column.$key.",";
					if (gettype($value)=="integer"){
						$val = $val.$value.",";
					}
					else
              			$val = $val."N'".$value."'".",";
				}
				$column = rtrim($column,",");
				$val = rtrim($val,",");
                $SQLcmd = "insert into $table($column)
						   values($val)";
				echo "</br>$SQLcmd";
				mysqli_select_db($this->conn, $this->dbname);
				// print "this query is $SQLcmd </br>";
				if (mysqli_query($this->conn, $SQLcmd)){
					print "success";
				} else {
					print"fault";
				}  
            }
		}

		public function select($sql){
			if (!($this->conn)) {
                die ("Cannot connect to".$this->server." using ".$this->user);
            } else {
				mysqli_select_db($this->conn, $this->dbname);
				$value=array();
				if ($result = mysqli_query($this->conn, $sql)){
					if ($result->num_rows > 0) {
						// output data of each row
						while($row = $result->fetch_assoc()) {
							array_push($value,$row);
						}
					}
				} else {
					print"ko chạy đc sql select";
				}  
			return $value;
		}
    }
	}
?>

