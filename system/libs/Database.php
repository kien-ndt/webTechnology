<?php 

	class Database extends PDO {

		public function __construct($connect, $user, $password) {
			
			parent::__construct($connect, $user, $password);

		}

		public function select($sql, $data = array(), $fetchStyle = PDO::FETCH_ASSOC) {
			
			$statement = $this->prepare($sql);

			foreach ($data as $key => $value) {
				
				$statement->bindParam($key, $value);// Thay the :id cua $sql thanh $id truyen vao
			}

			$statement->execute();
			return $statement->fetchAll($fetchStyle);
			
		}

		public function insert($table, $data) {
			//Lay key trong $data va them dau "," vao giua cac phan tu
			$keys = implode(", ", array_keys($data));
			$values = ":".implode(", :", array_keys($data)); //Gia tri $values: :title_category_product, :desc_category_product
			

			// $sql = "INSERT INTO $table_category_product(title_category_product, desc_category_product) VALUES(':title_category_product', ':desc_category_product')";

			$sql = "INSERT INTO $table($keys) VALUES($values)";
			$statement = $this->prepare($sql); // Chuan bi cau lenh sql

			// $statement->bindParam(':title_category_product', $title_category_product);
			// $statement->bindParam(':desc_category_product', $desc_category_product);
			// ~
			foreach ($data as $key => $value) {
				$statement->bindValue(":$key", $value);
			}	

			return $statement->execute(); // Thuc hien them du lieu
		}

		public function update($table, $data, $cond) {

			$updateKeys = NULL;
			foreach ($data as $key => $value) {
				$updateKeys .= "$key=:$key,"; // $updateKeys ~ title_category_product=:title_category_product, desc_category_product=:desc_category_product
			}
			$updateKeys = rtrim($updateKeys, ","); // Cat bo dau "," cuoi cung	

			$sql = "UPDATE $table SET $updateKeys WHERE $cond";
			$statement = $this->prepare($sql);
			foreach ($data as $key => $value) {
				$statement->bindValue(":$key", $value);
			}	

			return $statement->execute();
		}

		public function delete($table, $cond, $limit = 1) {
			$sql = "DELETE FROM $table WHERE $cond LIMIT $limit";
			return $this->exec($sql);
		}

	}

?>