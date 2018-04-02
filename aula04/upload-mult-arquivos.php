<form method="POST" enctype="multipart/form-data">
	<p>Fotos:</p>
	<input type="file" name="fotos[]">
	<input type="file" name="fotos[]">
	<input type="file" name="fotos[]">
	<input type="file" name="fotos[]">
	<input type="submit" value="Enviar">
</form>
<pre>
<?php 

if ($_POST || $_FILES) {
	
	foreach ($_FILES['fotos']['error'] as $index => $error) {
		if (UPLOAD_ERR_OK == $error) {

		$nome = basename($_FILES['fotos']['name'][$index]);

		$movido = move_uploaded_file($_FILES['fotos']['tmp_name'][$index], "fotos/{$nome}");

		if ($movido) {
			echo "<img src='fotos/{$nome}' height='42' width='42'> ";
		}
	}
	}
}