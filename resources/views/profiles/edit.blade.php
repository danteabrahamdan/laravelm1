@extends('layouts.app')

@section('styles')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.css" integrity="sha512-CWdvnJD7uGtuypLLe5rLU3eUAkbzBR3Bm1SFPEaRfvXXI2v2H5Y0057EMTzNuGGRIznt8+128QIDQ8RqmHbAdg==" crossorigin="anonymous" />  
@endsection

@section('botones')
  <a href="" class="btn btn-outline-primary">&#8592; Volver</a>
@endsection

@section('content')
  <h2 class="text-center mb-2">Editar mi perfil</h2>
  <div class="row justify-content-center mt-2">
    <div class="col-md-8">
      <form action="" method="POST" enctype="multipart/form-data" novalidate>
        @csrf
        <div class="form-group">
          <label for="name">Tu nombre</label>
          <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="">
          
          @error('name')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="url">Tu sitio web:</label>
          <input type="text" name="url" id="url" class="form-control @error('url') is-invalid @enderror" value="">
          
          @error('url')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="biography">Tu biografia:</label>
          <input type="hidden" name="biography" id="biography" value="">
          <trix-editor input="biography" class="form-control @error('biografia') is-invalid @enderror"></trix-editor>

          @error('biography')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <label for="imagen">Imagen</label>
          <input type="file" name="imagen" id="imagen" class="form-control @error('imagen') is-invalid @enderror">

          <div class="mt-3"><p>Imagen actual:</p><img src="/storage/..." style="width: 300px;"></div>

          @error('imagen')
            <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
            </span>
          @enderror
        </div>

        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="+ Actualizar datos">
        </div>
      </form>
    </div>
  </div>
@endsection

@section('scripts')
  <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.js" integrity="sha512-/1nVu72YEESEbcmhE/EvjH/RxTg62EKvYWLG3NdeZibTCuEtW5M4z3aypcvsoZw03FAopi94y04GhuqRU9p+CQ==" crossorigin="anonymous" defer></script>
@endsection