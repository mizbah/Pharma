<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	if ( ! function_exists('getArrayFromXML'))	{
	    function getArrayFromXML($file)  {
	    	if (file_exists($file)) {
	    		$xml = file_get_contents($file);
		    	$deXml = simplexml_load_string($xml);
				$deJson = json_encode($deXml);
				$xml_array = json_decode($deJson,TRUE);
// 				echo '<pre />';
// 				var_dump($xml_array); die;
				return $xml_array;
	    	}
	    	return false;
	    }   
	}
	
	function xml_to_array($xml,$main_heading = '') {
		$deXml = simplexml_load_string($xml);
		$deJson = json_encode($deXml);
		$xml_array = json_decode($deJson,TRUE);
		if (! empty($main_heading)) {
			$returned = $xml_array[$main_heading];
			return $returned;
		} else {
			return $xml_array;
		}
	}
	