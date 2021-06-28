@extends('layouts.app')

@section('styles')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
@endsection

@section('botones')
  <a href="{{ route('books.create') }}" class="btn btn-outline-primary">&#8592; {{ __('messages.booknew') }}</a>
@endsection

@section('content')
<h2 class="text-center mb-4">{{ __('messages.books') }}</h2>

<div class="col-md-12 mx-auto bg-white p-2">
  <div class="row">
    @foreach ($books as $book)
      <div class="col-md-3">
        <div class="card shadow  mb-4">
          <img src="/storage/{{ $book->img_url }}" alt="receta imagen" class="card-img-top">

          <div class="card-body">
            <h5 class="card-title">{{ $book->title }}</h5>

            <div class="meta-receta d-flex justify-content-between">
              <fecha-libro fecha="{{ $book->created_at }}"></fecha-libro>

              <small class="text-primary fecha">
                10 me gusta
              </small>
            </div>

            <p class="mt-2">{{ $book->author }}</p>

            <a href="{{ route('books.show', ['book' => $book->id]) }}" class="btn btn-outline-success btn-block">{{ __('messages.bookwatch') }} &#8594;</a>
          </div>
        </div>
      </div>
    @endforeach
  </div>

  <div class="mt-4 justify-content-center d-flex">
    {{ $books->links("pagination::bootstrap-4") }}
  </div>
</div>
@endsection
