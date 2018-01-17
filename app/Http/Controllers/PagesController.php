<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
	public function getIndex() {
		return view('pages.welcome');
	}

	public function getAbout() {
		$first = "Argjend";
		$last = "Haxholli";

		$fullname = $first . " " . $last;
		$email = 'haxholliargjend@gmail.com';
		// return view('pages.about')->withFullname($fullname)->withEmail($email);
		$data = [];
		$data['fullname'] = $fullname;
		$data['email'] = $email;

		return view('pages.about')->withData($data);
	}

	public function getContact() {
		return view('pages.contact');
	}
}

?>