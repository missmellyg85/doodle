<?php

class Encryption
{
	public static function aes_decrypt($encryptedText, $key)
	{
		if(strlen($encryptedText) == 0) return "";
		$mode=MCRYPT_MODE_ECB;
		$enc=MCRYPT_RIJNDAEL_128;

		$td=mcrypt_module_open($enc, '', $mode, '');
		$iv= mcrypt_create_iv( mcrypt_get_iv_size($enc, $mode), MCRYPT_RAND);
		mcrypt_generic_init($td, $key, $iv);
		
		$dec=mdecrypt_generic($td, $encryptedText);
		
		mcrypt_generic_deinit($td);
		mcrypt_module_close($td);
		//$decrypted=mcrypt_decrypt($enc, $key, $encryptedText, $mode, mcrypt_create_iv( mcrypt_get_iv_size($enc, $mode), MCRYPT_DEV_URANDOM));
		//return rtrim($decrypted);
		
		return rtrim($dec, ((ord(substr($dec, strlen($dec) - 1, 1)) >= 0 && ord(substr($dec, strlen($dec) - 1, 1 ) ) <= 16 ) ? chr(ord(substr($dec, strlen($dec ) - 1, 1))): null) );
	}
	
	public static function aes_encrypt($text, $key)
	{
		$mode=MCRYPT_MODE_ECB;
		$enc=MCRYPT_RIJNDAEL_128;
		
		$pad_len= 16-(strlen($text) % 16);
		$text=str_pad($text, (16*(floor(strlen($text) / 16)+1)), chr($pad_len)); 
		
		$td=mcrypt_module_open($enc, '', $mode, '');
		$iv= mcrypt_create_iv( mcrypt_get_iv_size($enc, $mode), MCRYPT_RAND);
		mcrypt_generic_init($td, $key, $iv);
		
		$encrypted_val=mcrypt_generic($td, $text);

		mcrypt_generic_deinit($td);
		mcrypt_module_close($td);
		
		return $encrypted_val;
	}
}