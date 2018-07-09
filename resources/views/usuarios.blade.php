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

<h2>
	
<!-- De esta forma se realiza con plantillas de LARAVEL -->
 @foreach($users as $user)
	<ul>
		<li>
			{{ $user }}
		</li>	
	</ul>

@endforeach


<!--  De esta forma se realiza con PHP
<?php foreach ($users as $user):?> 
 		<?= e($user) ?>
  <?php endforeach ?> -->
 
</h2>

</body>
</html>