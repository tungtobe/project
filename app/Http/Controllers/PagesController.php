<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
    public function home() {
        $people = ['Tung', 'Chung', 'Vinh'];
        return view('welcome', compact('people'));
    }

    public function begin() {
        flash('This is my flash message', 'info');

        return redirect('/');
    }

    public function about() {
        return view('pages.about');
    }
}
