<!DOCTYPE html>
<html>
<head>
	<title>Vista Usuarios</title>
</head>
<body>
	<h1>
		<!-- <?= e($titulo) ?>  -->
		{{ $titulo }} 
			
	</h1>

	<hr>

<h2>
	
<!-- De esta forma se realiza con plantillas de LARAVEL -->


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

------------------------------------------------------------- -->
 
</h2>

</body>
</html>