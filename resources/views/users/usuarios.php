<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Listado de usuarios</title>
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
</head>
<body>
	<h2>Listado de usuarios</h2>
	<ul>
		<?php foreach ($users as $user): ?>
			<li><?= $user ?></li>
		<?php endforeach ?>
	</ul>
</body>
</html>