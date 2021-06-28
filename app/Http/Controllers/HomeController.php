<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\CategoryBook;
use Illuminate\Http\Request;

class HomeController extends Controller {
	
	public function index() {
		$newBooks = Book::latest()->take(5)->get();
		$categorias = CategoryBook::all();
		foreach($categorias as $categoria) {
			$books[$categoria->category_name][] = Book::where('category_id', $categoria->id)->take(3)->get();
		}
		return view('home')->with('nuevos', $newBooks)->with('books', $books);
	}
}
