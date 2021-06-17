<?php

namespace App\Http\Controllers;
use App\Models\CategoryBook;
use Illuminate\Http\Request;


class BookController extends Controller {
	
	public function index() {
		return view('books.index');
	}

	public function create() {
		$categorias = CategoryBook::all(['id', 'category_name']);
		return view('books.create')->with('categorias', $categorias);
	}

	public function store(Request $request) {
		
	}

	public function show($id)
	{
		return view('books.show');
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
