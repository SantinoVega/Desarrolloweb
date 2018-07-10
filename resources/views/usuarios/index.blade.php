<!-- Con esta directuva se incluye la vista header al archivo
header contiene el css (estilo) para darde un mejor diseño a la pagina.
@@include('header') 
se cambiara esta directiva por la siguiente para tener mayor legilibilidad.   -->

@extends('layout')

@section('content')

		<h1>
			<!-- <?= e($titulo) ?>  -->
			{{ $titulo }} 
				
		</h1>

		<hr>
		
		<h2>	
<!-- Directivas Laravel - plantillas de LARAVEL -->
		<ul>
	 	@forelse($users as $user)
			<li>
				{{ $user }}
			</li>
		@empty
			<p>No existen usuarios registrados</p>

		@endforelse
		</ul>

		{{ time() }}
		</h2>


@endsection

@section('sidebar')
   <h2>Barra Lateral sobreescrita</h2>
@endsection


<!--  Distintas formas de realizar lo anterior con Laravel.blade
	  y utilizando PHP plano.

---------------------------------------------------------------
Directivas de laravel con blade Podemos reducir codigo PHP utilizando las directivas (forma corta de laravel.blade)

@if(!empty($users))
@endif

@empty($users)
@else
@endempty

----------------------------------------------------------------
Imprimir la variable $user con PHP plano.

<?php foreach ($users as $user):?> 
 		<?= e($user) ?>
  <?php endforeach ?> 






@include('footer')

Se cambio el footer por @seccion y @layout para mejorar la legibilidad
------------------------------------------------------- -->

