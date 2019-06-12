<?php

namespace Mego\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mego\Contact\Models\Contact;

class ContactController extends Controller {

	public function index() {
		return view('contact::contact');

	}

	public function send(Request $request) {
		Contact::create($request->all());
		return redirect('/contact');
	}

}
