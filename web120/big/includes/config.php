<?php
/**
 * config.php provides a place to store configuration info, 
 * such as your reCAPTCHA site keys
 *
 * @package nmCAPTCHA2
 * @author Bill & Sara Newman <williamnewman@gmail.com>
 * @version 1.01 2015/11/17
 * @link http://www.newmanix.com/
 * @license http://www.apache.org/licenses/LICENSE-2.0
 * @see contact_include.php 
 * @see recaptchalib.php
 * @see util.js 
 * @todo none
 */

//Here are the keys for the server: seattlecentral.edu
$siteKey = "6LeDaSoUAAAAACnEiqA3QAkiRU-Q_wtk0vuBa_OX";
$secretKey ="6LeDaSoUAAAAACJ69mIHYOxL4atri9oPrjkIVMFv";

//this helps eliminate PHP date errors
date_default_timezone_set('America/Los Angeles');

//this constant allows a page to know it's own url/name
define('THIS_PAGE' ,basename($_SERVER['PHP_SELF']));

switch(THIS_PAGE)
{
	case 'index.php':
		$title = 'Web Dev Examples by Shumi Yang';
		$logo = 'fa-home';
		$PageID = 'Client Questionnaire';
	break;
	
	case 'flexbox.php':
		$title = 'Flexbox Reserch';
		$logo = 'fa-users';
		$PageID = 'Flexbox Reserch';
	break;
		
	case 'galleries.php':
		$title = 'Galleries and Sliders';
		$logo = 'fa-pencil-square-o';
		$PageID = 'Galleries and Sliders';
	break;
		
		case 'map.php':
		$title = 'Google Map';
		$logo = 'fa-pencil-square-o';
		$PageID = 'Google Map';
	break;
		
		case 'calendar.php':
		$title = 'Google Calender';
		$logo = 'fa-pencil-square-o';
		$PageID = 'Google Calender';
	break;
		
		case 'youtube.php':
		$title = 'Google YouTube Video';
		$logo = 'fa-pencil-square-o';
		$PageID = 'Google YouTube Video';
	break;
		
		case 'shoppingcarts.php':
		$title = 'Shoppingcarts';
		$logo = 'fa-pencil-square-o';
		$PageID = 'Shoppingcarts';
	break;	
		
		case 'siteapp.php':
		$title = 'Responsive Site v.s. Native App';
		$logo = 'fa-pencil-square-o';
		$PageID = 'Responsive Site v.s. Native App';
	break;
	
	case 'webcam.php':
		$title = 'Live Web Cameras';
		$logo = 'fa-pencil-square-o';
		$PageID = 'Live Web Cameras';
	break;
		
		
	default:
		$title = THIS_PAGE;
		$logo = '';
		$PageID = '';
}

