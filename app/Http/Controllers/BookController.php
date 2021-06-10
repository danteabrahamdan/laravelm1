<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;


class BookController extends Controller
{
	
	public function index()
	{
		return view('books/index');
	}

	public function create()
	{
		return view('books/create');
	}

	public function store(Request $request)
	{
		//
	}

	public function show($id)
	{
		return view('books/show');
	}

	public function edit($id)
	{
		return view('books/edit');
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
