<!DOCTYPE html>
<html>
<head>
	<title>Vista Usuarios</title>
</head>
<body>
	<h1><?= e($titulo) ?> </h1>

<h2>
	
<?php foreach ($users as $user):?>
	<ul>
		<li>
			<?= e($user) ?>
		</li>	
	</ul>


<?php endforeach; ?>

</h2>

</body>
</html>