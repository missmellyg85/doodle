<?php
class Utilities {
	public static function slug($str){
		$str = strtolower(trim($str));
		$str = preg_replace('/[^a-z0-9-]/', '-', $str);
		$str = preg_replace('/-+/', "-", $str);
		return $str;
	}
	
	public static function strtobool($string){
		switch(strtolower($string)){
			case "true":
			case "1":
			case 1:
				return true;
				break;
			case "false":
			case "0":
			case 0:
				return false;
				break;
			default:
				return null;
		}
	}
	
	public static function uniqueToken() {
		return uniqid(rand(1000,9999),true);
	}
	
	public static function generateRandomKey($length,$useSymbols=true) {	
		if($useSymbols){ $possible_charactors = "abcdefghijklmnopqrstuvwxyz1234567890!@#$%^&*ABCDEFGHIJKLMNOPQRSTUVWXYZ"; }
		else{ $possible_charactors = "abcdefghijklmnopqrstuvwxyz1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZ"; }
		
		$string = "";
		while(strlen($string)<$length) {
			$string .= substr($possible_charactors, rand() % (strlen($possible_charactors)) , 1);
		}
		return($string);
	}
}
?>