@extends('layouts.app')

@section('styles')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
@endsection

@section('main')
	<div class="hero-categorias">
		<div class="container h-100">
			<div class="row h-100 align-items-center">
				<div class="col-md-4 texto-buscar">
					<p class="display-4">Encuentra un libro</p>

					<input type="search" name="buscar" class="form-control" placeholder="Buscar por titulo">
				</div>
			</div>
		</div>
	</div>
@endsection

@section('content')
	<div class="container">
		<div class="col-md-10 mx-auto justify-content-center">
			<h3 class="titulo-categoria mb-4">Ultimos libros</h3>	

			<div class="owl-carousel owl-theme">
				@foreach($nuevos as $nuevo)
					<div class="card">
						<div style="display: flex; justify-content: center;">
							<img src="/storage/{{ $nuevo->img_url }}" alt="imagen libro" class="card-img-top">
						</div>

						<div class="card-body">
							<h6 class="text-primary">{{ $nuevo->title }}</h6>

							<p>{{ Str::words(strip_tags($nuevo->abstract), 9) }}</p>

							<a href="{{ route('books.show', ['book' => $nuevo->id]) }}" class="btn btn-outline-primary btn-block">Ver &#8594;</a>
						</div>
					</div>
				@endforeach
			</div>
		</div>
	</div>

	@foreach($books as $key => $grupo)
		<div class="container">
			<div class="col-md-10 mx-auto justify-content-center">
				<h3 class="titulo-categoria mt-3 mb-4">{{ $key }}</h3>

				<div class="row">
					@foreach($grupo as $books)
						@foreach($books as $book)
							<div class="col-md-4">
								<div class="card shadow">
									<div style="display: flex; justify-content: center;">
										<img src="/storage/{{ $book->img_url }}" alt="libro imagen" class="card-img-top w-50">
									</div>
		
									<div class="card-body">
										<h5 class="card-title">{{ $book->title }}</h5>
		
										<div class="meta-receta d-flex justify-content-between">
		
											<small class="text-primary fecha">
												<fecha-libro fecha="{{ $book->created_at }}"></fecha-libro>
											</small>
		
											<small>10 me gusta</small>
										</div>
		
										<p class="mt-2">{{ Str::words(strip_tags($book->abstract), 6) }}</p>
		
										<a href="{{ route('books.show', ['book' => $book->id]) }}" class="btn btn-outline-success btn-block">Ver &#8594;</a>
									</div>
								</div>
							</div>
						@endforeach
					@endforeach
				</div>
			</div>
		</div>		
	@endforeach
	
@endsection