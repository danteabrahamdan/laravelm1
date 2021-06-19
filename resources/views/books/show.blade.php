@extends('layouts.app')

@section('styles')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
@endsection

@section('botones')
  <a href="{{ route('books.index') }}" class="btn btn-outline-primary">&#8592; {{ __('messages.bookback') }}</a>
@endsection

@section('content')
<div class="row justify-content-center">
  <div class="col-md-10">
		<article class="">
			<h3 class="text-center mb-4">{{ $book->title }}</h3>

			<div class="text-center">
				<img src="/storage/{{ $book->img_url }}" alt="imagen" class="w-50">
			</div>

			<div class="book-meta mt-5">
        <div class="meta-receta d-flex justify-content-between">
          <p>
            <span class="font-weigh-bold text-danger">{{ __('messages.bookuser') }}:</span>
            {{ $book->user->name }}
          </p>

          <p>
            <span class="font-weigh-bold text-danger">{{ __('messages.bookcat') }}:</span>
            {{ $book->category->category_name }}
          </p>

          <p>
            <span class="font-weigh-bold text-danger">{{ __('messages.bookauthor') }}:</span>
            {{ $book->author }}
          </p>
        </div>

        <div class="meta-receta d-flex justify-content-between">
          <p>
            <span class="font-weigh-bold text-danger">{{ __('messages.bookisbn') }}:</span>
            {{ $book->isbn }}
          </p>
  
          <p>
            <span class="font-weigh-bold text-danger">{{ __('messages.bookyear') }}:</span>
            {{ $book->year_of_publication }}
          </p>
  
          <p>
            <span class="font-weigh-bold text-danger">{{ __('messages.bookpub') }}:</span>
            {{ $book->publisher_name }}
          </p>
        </div>

				<div class="ingredientes">
					<h4 class="my-3 text-danger">{{ __('messages.bookabs') }}</h4>
          {!! $book->abstract !!}
				</div>

        <div class="row">
          <div class="col-md-4">
            <div class="text-center mt-5">
              <a href=""><i class="fa fa-heart heart"></i></a>
              <p><small>35 {{ __('messages.bookfav') }}</small></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="text-center mt-5">
              <a href="{{ route('books.edit', ['book' =>$book->id ]) }}"><i class="fa fa-edit edit"></i></a>
              <p><small>{{ __('messages.bookice') }}</small></p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="text-center mt-5">
              <form action="{{ route('books.destroy', ['book' =>$book->id ]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-primary">
                  <i class="fa fa-trash trash"></i>
                </button>
                <p><small>{{ __('messages.bookict') }}</small></p>
              </form>
            </div>
          </div>
        </div>
			</div>
		</article>
	</div>
</div>
@endsection