<?php
/*
Plugin Name: Thaana Date
Plugin URI: http://www.fayax.net/thaana-date
Description: Converts english months and days to Thaana format.
Version: 1.1
Author: Fayax
Author URI: http://www.fayax.net
*/

function thaana_date_replace($text) {
	$days_english = array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday',
	'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun', 
	'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December', 
	'Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 
	'1st', '2nd', '3rd', '4th', '5th', '6th', '7th', '8th', '9th', '0th');
	
	$days_thaana = array('ހޯމަ', 'އަންގާރަ', 'ބުދަ', 'ބުރާސްފަތި', 'ހުކުރު', 'ހޮނިހިރު', 'އާދިއްތަ', 
	'ހޯމަ', 'އަންގާރަ', 'ބުދަ', 'ބުރާސްފަތި', 'ހުކުރު', 'ހޮނިހިރު', 'އާދިއްތަ', 
	'ޖެނުއަރީ', 'ފެބުރުއަރީ', 'މާޗް', 'އޭޕްރީލް', 'މެއި', 'ޖޫން', 'ޖުލައި', 'އޮގަސްޓް', 'ސެޕްޓެމްބަރު', 'އޮކްޓޯބަރ', 'ނޮވެމްބަރު', 'ޑިސެމްބަރު', 
	'ޖެނުއަރީ', 'ފެބުރުއަރީ', 'މާޗް', 'އޭޕްރީލް', 'މެއި', 'ޖޫން', 'ޖުލައި', 'އޮގަސްޓް', 'ސެޕްޓެމްބަރު', 'އޮކްޓޯބަރު', 'ނޮވެމްބަރު', 'ޑިސެމްބަރު',
	'1', '2', '3', '4', '5', '6', '7', '8', '9', '0');
	$text = str_replace($days_english, $days_thaana, $text);
	return $text;
}

add_filter('the_time', 'thaana_date_replace');
add_filter('the_modified_time', 'thaana_date_replace');
add_filter('the_date', 'thaana_date_replace');
add_filter('the_modified_date', 'thaana_date_replace');
add_filter('get_comment_date','thaana_date_replace');

?>