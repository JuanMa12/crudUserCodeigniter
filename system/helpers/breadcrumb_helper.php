<?php
/** 
 * 
 * @author	Santiago Molina  
 */

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * CodeIgniter Breadcrumb Helpers
 *
 * @package		CodeIgniter
 * @subpackage	Helpers
 * @category	Helpers
 * @author		Santiago Molina 
 */

// ------------------------------------------------------------------------

if ( ! function_exists('breadcrumb'))
{
	/**
	 * Breadcrumb
	 *
	 * Create a breadcrumb html
	 * first parameter either as a string or an array.
	 *
	 * @param	string	$uri	 
	 * @return	string
	 */
	function breadcrumb($uri = '',$home = FALSE)
	{
		if($uri == '')return "Need uri";
		$breadcrumb = '';
		$url = '';
		$uri_segments = explode('/', $uri);		
		foreach ($uri_segments as $segment) {
			if(!$home){				
				$url .= $segment.'/';
				array_shift($uri_segments);
				$home = TRUE;				
			}else{
				$url .= $segment.'/';
				$breadcrumb .= '<a href="'.site_url($url).'">'.ucfirst($segment).'</a>'.' / ';
			}			
		}
		return $breadcrumb;
	}
}

// ------------------------------------------------------------------------