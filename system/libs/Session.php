<?php 

	class Session {

		//Ham khoi tao session
		public static function init() {
			session_start();
		}

		//Set session
		public static function set($key, $val) {
			$_SESSION[$key] = $val;
		}

		//Lay session
		public static function get($key) {
			if(isset($_SESSION[$key])){
				return $_SESSION[$key];
			} else {
				return false;
			}
		}

		//Kiem tra session ton tai
		public static function checkSession() {
			self::init();
			if(self::get('login') == false) {
				self::destroy();
				header("Location:".BASE_URL."Guest");
			} else {

			}
		}

		//Huy full session
		public static function destroy() {
			session_destroy();
		}

		//Huy mot session
		public static function unset($key) {
			session_unset($key);
		}
	}




?>