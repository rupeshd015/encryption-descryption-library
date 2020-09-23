<?php

if (! defined('BASEPATH'))
    exit('No direct script access allowed');

class Encrypt_Decrypt{
	
	protected $ciphering 		= 	"AES-128-CTR";
	protected $options 			= 	0;
	protected $iv 				= 	'1234567891098765';
	protected $key 				= 	"elxerit";


	public function encryption($password){
		$encryption = openssl_encrypt($password, $this->ciphering, $this->key, $this->options, $this->iv);
		return $encryption;
	}

	public function decryption($encryption){
		$decryption=openssl_decrypt ($encryption, $this->ciphering,$this->key, $this->options, $this->iv);
		return $decryption;
	}
}

?>