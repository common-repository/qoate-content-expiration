<?php
/*
Plugin Name: Qoate Content Expiration
Plugin URI: http://dannyvankooten.com/wordpress-plugins/post-content-expiration/
Description: Automatically replaces text with a custom message after an expiration date.
Author: Danny van Kooten
Version: 1.3
Author URI: http://DannyvanKooten.com
License: GPL2
*/

/*  Copyright 2010  Danny van Kooten  (email : danny@vkimedia.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if(!class_exists('WPAlchemy_MetaBox')) require_once 'WPAlchemy/MetaBox.php';

class Qoate_Content_Expiration {

	var $expiration_info;
	
	function __construct()
	{
		define('QCE_PLUGIN_DIR',WP_PLUGIN_DIR.'/qoate-content-expiration/'); 
		add_shortcode('exp', array(&$this,'expiration_check'));
		
		if (is_admin()) wp_enqueue_style('custom_meta_css',QCE_PLUGIN_DIR.'custom/meta.css');
		
		$this->expiration_info = new WPAlchemy_MetaBox(array
		(
			'id' => '_expiration_info', // underscore prefix hides fields from the custom fields area
			'title' => 'Qoate Content Expiration Options',
			'template' => QCE_PLUGIN_DIR.'custom/expiration_info.php'
		));
	}
	
	
	function expiration_check($atts,$content)
	{
		if(isset($atts['date'])) {
			$date = split('/',$atts['date']);
			$expdate = $date[1].'/'.$date[0].'/'.$date[2];
		} else {
			$expdate= $this->expiration_info->get_the_value('exp_mm').'/'.$this->expiration_info->get_the_value('exp_dd').'/20'.$this->expiration_info->get_the_value('exp_yy');
		}

		if(isset($atts['time'])) {
			$expdate .= ' '.$atts['time'];
		} else {
			$expdate .= ' 00:00:00';
		}

		if(isset($atts['message'])) {
			$msg = $atts['message'];
		} else {
			$msg = $this->expiration_info->get_the_value('exp_text');
		}

		return $this->is_expired($expdate,$content,$msg);
	}

	function is_expired($expdate,$content,$msg)
	{
		$given_date = split('/',$expdate);
		
		if(checkdate($given_date[0],$given_date[1],$given_date[2])) {
			$timebetween = strtotime($expdate) - time();
			
			if ($timebetween <= 0) return $msg;
		}
		
		return $content;
	}

}

$Qoate_Content_Expiration = new Qoate_Content_Expiration();

?>