<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	if ( ! function_exists('getPassword'))	{
	    function getPassword($username,$pasword)  {
	    	return substr (sha1($username.getKye().$pasword),10,-10);
	    }   
	}
	if ( ! function_exists('getKye'))	{
		function getKye()  {
			return 'o sokhina gesos kina bhuila amare';
		}
	}