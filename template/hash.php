<?php
	define('METHOD','AES-256-CBC');
	define('SECRET_KEY','https://www.colmextul.edu.mx/');
	define('SECRET_VII','270107');

	class protect{
		public static function encrypt($matric) {
            $output=FALSE;
			$key=hash('sha512', SECRET_KEY);
			$vii=substr(hash('sha512', SECRET_VII), 0, 16);
			$output=openssl_encrypt($matric, METHOD, $key, 0, $vii);
			$output=base64_encode($output);
			return $output;
		}
		public static function desencrypt($code){
			$key=hash('sha512', SECRET_KEY);
			$vii=substr(hash('sha512', SECRET_VII), 0, 16);
			$output=openssl_decrypt(base64_decode($code), METHOD, $key, 0, $vii);
			return $output;
		}
	}
?>