@extends('layouts.app')

@section('styles')
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" />
@endsection

@section('content')
<div class="row justify-content-center">
  <div class="col-md-10">
		<article class="">
			<h3 class="text-center mb-4">titulo libro</h3>

			<div class="text-center">
				<img src="/images/book.jpg" alt="imagen" class="w-50">
			</div>

			<div class="book-meta mt-5">
        <div class="meta-receta d-flex justify-content-between">
          <p>
            <span class="font-weigh-bold text-danger">Escrito por:</span>
            Autor del libro
          </p>

          <p>
            <span class="font-weigh-bold text-danger">Categoria:</span>
            categoria perteneciente
          </p>

          <p>
            <span class="font-weigh-bold text-danger">Autor del libro:</span>
            Autor del libro
          </p>
        </div>

        <div class="meta-receta d-flex justify-content-between">
          <p>
            <span class="font-weigh-bold text-danger">ISBN:</span>
            12345678910
          </p>
  
          <p>
            <span class="font-weigh-bold text-danger">Fecha publicación:</span>
            2020/10/10
          </p>
  
          <p>
            <span class="font-weigh-bold text-danger">Editorial:</span>
            editorial ABCDEF
          </p>
        </div>

				<div class="ingredientes">
					<h4 class="my-3 text-danger">Resumen</h4>
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab suscipit accusamus aliquid qui eligendi dolorum quibusdam
           inventore iusto error, accusantium, voluptate totam blanditiis minus laborum, cum nam harum neque assumenda beatae 
           ipsa voluptatem. Exercitationem, repellat eum consequuntur ab quisquam deserunt quas esse earum eius libero minima, 
           perferendis molestias molestiae aperiam?. <br>

          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ab suscipit accusamus aliquid qui eligendi dolorum quibusdam
           inventore iusto error, accusantium, voluptate totam blanditiis minus laborum, cum nam harum neque assumenda beatae 
           ipsa voluptatem. Exercitationem, repellat eum consequuntur ab quisquam deserunt quas esse earum eius libero minima, 
           perferendis molestias molestiae aperiam?.
				</div>

        <div class="text-center mt-5">
          <a href=""><i class="fa fa-heart heart"></i></a>
          <p><small>35 personas lo tienen como favorito</small></p>
        </div>
			</div>
		</article>
	</div>
</div>
@endsection