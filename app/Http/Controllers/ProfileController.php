<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Profile;
use Illuminate\Http\Request;


class ProfileController extends Controller {

	public function show(Profile $profile) {
		$books = Book::where('user_id', $profile->user_id)->paginate(4);
		return view('profiles.show')->with('profile', $profile)->with('books', $books);
	}

	public function edit($id) {
		return view('profiles.edit');
	}

	public function update(Request $request, $id) {
		//
	}
}
