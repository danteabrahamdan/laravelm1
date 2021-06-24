@extends('layouts.app')

@section('content')
<div class="row justify-content-center">
  <div class="col-md-10">
		<div class="row">
			<div class="col-md-5">
				@if($profile->image_url)
        	<img src="/storage/{{ $profile->image_url }}" alt="Foto perfil" class="w-100 rounded-circle">	
				@else
        	<img src="/images/no-image.png" alt="Foto perfil" class="w-100 rounded-circle">	
				@endif
			</div>
			<div class="col-md-7 mt-5 mt-md-0">
				<h4 class="text-center mb-2 text-primary">{{ $profile->user->name }}</h4>
				<span class="text-primary">URL: </span><a href="{{ $profile->user->url }}">Ir a su sitio web</a>
				<div class="biografia">
					<h6 class="text-primary mt-2">Biografia</h6>
					{!! $profile->biography !!}
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<h4 class="mt-5 text-primary text-center">Libros subidos por: {{ $profile->user->name }}</h4>

				<div class="container">
					<div class="row mx-auto bg white p-4">
            @if(count($books) > 0)
							@foreach($books as $book)
								<div class="col-md-4 mb-4">
									<div class="card">
										<img src="/storage/{{ $book->img_url }}" alt="imagen libro" class="card-img-top">
										<div class="card-body">
											<h5>{{ $book->title }}</h5>
											<a href="{{ route('books.show', ['book' => $book->id]) }}" class="btn btn-outline-primary btn-block">Ver &#8594;</a>
										</div>
									</div>
								</div>
							@endforeach
						@else
							<p class="text-center w-100">Sin libros por el momento</p>
						@endif
					</div>
				</div>
			</div>

			<div class="col-md-12">
				<div class="justify-content-center d-flex">
					{{ $books->links("pagination::bootstrap-4") }}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection