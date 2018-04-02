<form method="POST" enctype="multipart/form-data">
	<p>Arquivo: <input type="file" name="arquivo"></p>
	<input type="submit" value="Enviar">
</form>
<pre>
<?php 

if ($_POST || $_FILES) {
	
	if (UPLOAD_ERR_OK == $_FILES['arquivo']['error']) {

		$nome = basename($_FILES['arquivo']['name']);

		$movido = move_uploaded_file($_FILES['arquivo']['tmp_name'], "fotos/{$nome}");

		if ($movido) {
			echo "Salvo com Sucesso!! <hr>";
			echo "<object data='fotos/{$nome}'type='application/pdf'></object>";
		}
	}
}