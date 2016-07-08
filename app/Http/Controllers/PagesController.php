<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
	public function home() {

		$people = ['Tung', 'Chung', 'Vinh'];
		return view('welcome', compact('people'));
	}

	public function about() {
		return view('pages.about');
	}
}
