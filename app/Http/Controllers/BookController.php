<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\CategoryBook;
use Illuminate\Http\Request;


class BookController extends Controller {
	
	public function index() {
		$idUser = auth()->user()->id;
		$books = Book::where('user_id', $idUser)->paginate(5);
		return view('books.index')->with('books', $books);
	}

	public function create() {
		$categorias = CategoryBook::all(['id', 'category_name']);
		return view('books.create')->with('categorias', $categorias);
	}

	public function store(Request $request) {
		$data = request()->validate([
			'title' => 'required|min:6',
			'author' => 'required',
			'category' => 'required',
			'abstract' => 'required',
			'isbn' => 'required|integer',
			'year' => 'required|integer',
			'publisher' => 'required',
			'imagen' => 'required|image'
		]);

		$urlImagen = $request['imagen']->store('upload-books', 'public');

		auth()->user()->books()->create([
			'title' => $data['title'],
			'author' => $data['author'],
			'category_id' => $data['category'],
			'abstract' => $data['abstract'],
			'isbn' => $data['isbn'],
			'year_of_publication' => $data['year'],
			'publisher_name' => $data['publisher'],
			'img_url' => $urlImagen
		]);

		return redirect()->action([BookController::class, 'index']);
	}

	public function show(Book $book) {
		return view('books.show', compact('book'));
	}

	public function edit($id)
	{
		return view('books.edit');
	}

	public function update(Request $request, $id)
	{
		//
	}

	public function destroy($id)
	{
		//
	}
}
