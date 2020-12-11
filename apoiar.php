<?php
	include("cabecalho_conexao.php");

    $parametro = $_POST['parametro'];

	if($parametro != "") {

		$SQL = "SELECT id, nome FROM cidades WHERE id_estado =$parametro";

        $resultado = mysqli_query($con, $SQL);
		echo "<label>Selecione a sua cidade:</label>";
		echo "<select name='cidade'>
		<option>Selecione a cidade</option>";
		while(($registro = mysqli_fetch_assoc($resultado)) != NULL) {
            echo '<option value="'.$registro['id'].'">'.$registro['nome'].'</option>';
		}
		echo "<\select>";
	}


	mysqli_close($con);

?>
