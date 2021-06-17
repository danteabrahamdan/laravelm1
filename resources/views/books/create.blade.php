@extends('layouts.app')

@section('styles')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" />  
@endsection

@section('content')
  <h2 class="text-center mb-2">{{ __('messages.booknew') }}</h2>
  <div class="row justify-content-center mt-2">
    <div class="col-md-8">
      {{-- TODO --}}
      <form action="" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="form-group">
          <label for="title">{{ __('messages.bookname') }}</label>
          <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" value="{{ old('title') }}">
          
          @error('title')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="author">{{ __('messages.bookauthor') }}</label>
          <input type="text" name="author" id="author" class="form-control @error('author') is-invalid @enderror" value="{{ old('author') }}">
          
          @error('author')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="category">{{ __('messages.bookcat') }}</label>
          <select name="category" id="category" class="form-control @error('category') is-invalid @enderror">
            @foreach ($categorias as $categoria)
              <option value="{{ $categoria->id }}" {{ old('category') == $categoria->id ? 'selected' : '' }}>{{ $categoria->category_name }}</option>
            @endforeach
          </select>

          @error('category')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="abstract">{{ __('messages.bookabs') }}</label>
          <input type="hidden" name="abstract" id="abstract" value="{{ old('abstract') }}">
          <trix-editor input="abstract" class="form-control @error('abstract') is-invalid @enderror"></trix-editor>

          @error('abstract')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="isbn">{{ __('messages.bookisbn') }}</label>
          <input type="number" name="isbn" id="isbn" class="form-control @error('isbn') is-invalid @enderror" value="{{ old('isbn') }}">
          
          @error('isbn')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="year">{{ __('messages.bookyear') }}</label>
          <input type="number" name="year" id="year" class="form-control @error('year') is-invalid @enderror" value="{{ old('year') }}">
          
          @error('year')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="publisher">{{ __('messages.bookpub') }}</label>
          <input type="text" name="publisher" id="publisher" class="form-control @error('publisher') is-invalid @enderror" value="{{ old('publisher') }}">
          
          @error('publisher')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="imagen">{{ __('messages.bookimg') }}</label>
          <input type="file" name="imagen" id="imagen" class="form-control @error('imagen') is-invalid @enderror">

          @error('imagen')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="+ {{ __('messages.bookadd') }}">
        </div>
      </form>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" defer></script>
@endsection