<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PagesController extends Controller {
	public function getIndex() {
		$posts = Post::all();
		return view('pages.welcome')->withPosts($posts);
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
