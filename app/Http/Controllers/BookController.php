<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\CategoryBook;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BookController extends Controller {

	public function __construct() {
		$this->middleware('auth', ['except' => 'show']);
	}
	
	public function index() {
		$idUser = auth()->user()->id;
		$books = Book::where('user_id', $idUser)->paginate(8);
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
			'isbn' => 'required|integer|unique:books',
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

	public function edit(Book $book) {
		$this->authorize('view', $book);

		$categorias = CategoryBook::all(['id', 'category_name']);
		return view('books.edit')->with('categorias', $categorias)->with('book', $book);
	}

	public function update(Request $request, Book $book) {
		$this->authorize('update', $book);

		$data = request()->validate([
			'title' => 'required|min:6',
			'author' => 'required',
			'category' => 'required',
			'abstract' => 'required',
			'isbn' => 'required|integer',
			'year' => 'required|integer',
			'publisher' => 'required'
		]);

		$book->title = $data['title'];
		$book->author = $data['author'];
		$book->category_id = $data['category'];
		$book->abstract = $data['abstract'];
		$book->isbn = $data['isbn'];
		$book->year_of_publication = $data['year'];
		$book->publisher_name = $data['publisher'];

		if(request('imagen')) {
			if($book->img_url) {
				Storage::delete('public/'.$book->img_url);
			}

			$urlImagen = $request['imagen']->store('upload-books', 'public');
			$book->img_url = $urlImagen;
		}

		$book->save();
		return redirect()->action([BookController::class, 'index']);
	}

	public function destroy(Book $book) {
		$this->authorize('delete', $book);

		Storage::delete('public/'.$book->img_url);
		
		$book->delete();
		return redirect()->action([BookController::class, 'index']);
	}
}
