<?php
	class Database1 {

        private $dbname;
        private $user;
        private $server;
		private $pass;
                private $port;
		private $conn;
		
        public function __construct($server, $user, $pass, $dbname,$port) {
            $this->server = $server;
			$this->user= $user;
			$this->pass = $pass;
            $this->dbname = $dbname; 
            $this->port = $port;
			$this->conn = mysqli_connect($this->server, $this->user, $this->pass, $this->dbname,$this->port);
			mysqli_set_charset($this->conn,"utf8");  
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
				// if (mysqli_query($this->conn, $SQLcmd)){
				// 	print "success";
				// } else {
				// 	print"fault";
				// }
				return   mysqli_query($this->conn, $SQLcmd);
            }
		}

		public function select($sql){				//tra ve ban ghi theo hang (hang1: thuoctinh1, thuoctinh2; hang2: thuoctinh1,...)
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

    	public function deleteRecords($sql){
			if (!($this->conn)) {
                die ("Cannot connect to".$this->server." using ".$this->user);
            } else {
				mysqli_select_db($this->conn, $this->dbname);
				return mysqli_query($this->conn, $sql);
			}
		}
		
		public function countRecords($table){
			$SQLcmd = "SELECT COUNT(*) as count FROM $table";
			mysqli_select_db($this->conn, $this->dbname);
			$result = mysqli_query($this->conn, $SQLcmd);
			if ($result->num_rows > 0) {
				return $result->fetch_assoc()['count'];
			}
			else return 0;
		}   

		//User
		public function affectedRows($sql, $username, $password) {
    		$user = mysqli_query($this->conn, $sql);
    		if(mysqli_num_rows($user) > 0) {
    			return 1;
    		}
    		return 0;
    	}

    	public function selectUser($sql, $username, $password) {
    		//Lay du lieu bang user
    		$user = mysqli_query($this->conn, $sql);
    		if (mysqli_num_rows($user) > 0) {
    			$result = mysqli_fetch_assoc($user);
    		} else {
    			echo "0 users";
    		}
    		return $result;
    	}

    	//Admin
    	public function adminCount($sql, $adminname, $password){
    		$admin = mysqli_query($this->conn, $sql);
    		if(mysqli_num_rows($admin) > 0) {
    			return 1;
    		}
    		return 0;
    	}

    	public function selectAdmin($sql, $adminname, $password) {
    		$admin = mysqli_query($this->conn, $sql);
    		if (mysqli_num_rows($admin) > 0) {
    			$result = mysqli_fetch_assoc($admin);
    		} else {
    			echo "0 admin";
    		}
    		return $result;
    	}

	}
?>

