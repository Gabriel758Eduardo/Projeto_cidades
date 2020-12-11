<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <script src="./js/jquery-3.5.1.js" charset="utf-8"></script>
        <script src="./js/CodigoJS.js" charset="utf-8"></script>
    </head>
    <body>
        <form action="processaDados.php" method="POST">
			<fieldset>
                <legend>Digite seus Dados:</legend>
                Nome: <input type="text" name="nome" /><br>
				Idade: <input type="number" name="idade" /><br>
				Email: <input type="text" name="email" /><br>

                <label>Selecione o seu estado:</label>
                <select id="estados" name="estados">
                    <option>Selecione seu Estado</option>
                    <?php
                        include("cabecalho_conexao.php");
                        $SQL = "SELECT * FROM estados";
                        $dados_retornados = mysqli_query($con, $SQL);
                        if(mysqli_num_rows($dados_retornados) > 0){

                            while (($resultado = mysqli_fetch_assoc($dados_retornados)) != null) {

                                $estado = $resultado['nome'];
                                $id_estado = $resultado['id'];
                                $uf = $resultado['uf'];
                                echo "<option value='".$id_estado."'>".$uf." - ".$estado."</option>";
                            }
                        }else {
                            echo "sem Estados. <br>";
                        }

                        include("rodape_conexao.php");
                    ?>
                </select><br>

                <div id="cidade">

                </div>

			   <input type="submit" value="Cadastrar" />
			</fieldset>
        </form>
    </body>
</html>
