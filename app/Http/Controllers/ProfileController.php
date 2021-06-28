<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller {

	public function __construct() {
		$this->middleware('auth', ['except' => 'show']);
	}

	public function show(Profile $profile) {
		$books = Book::where('user_id', $profile->user_id)->paginate(4);
		return view('profiles.show')->with('profile', $profile)->with('books', $books);
	}

	public function edit(Profile $profile) {
		$this->authorize('view', $profile);
		return view('profiles.edit')->with('profile', $profile);
	}

	public function update(Request $request, Profile $profile) {
		$this->authorize('update', $profile);

		$data = request()->validate([
			'name' => 'required|min:6',
			'url' => 'required',
			'biography' => 'required'
		]);

		if($request['imagen']) {
			if($profile->image_url) {
				Storage::delete('public/'.$profile->image_url);
			}

			$url = $request['imagen']->store('upload-profiles', 'public');
			$arrayImg = ['image_url' => $url];
		}

		auth()->user()->url = $data['url'];
		auth()->user()->name = $data['name'];
		auth()->user()->save();

		unset($data['name']);
		unset($data['url']);

		auth()->user()->profile()->update(array_merge(
			$data,
			$arrayImg ?? []
		));

		return redirect()->action([BookController::class, 'index']);
	}
}
