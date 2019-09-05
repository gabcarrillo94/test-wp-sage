<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class ContactUsPage extends Controller
{
	public static function title() {
		return get_the_title() . " | Send Your Message";
	}

	public static function contact() {
		return "+48 9999 9954";
	}
}
