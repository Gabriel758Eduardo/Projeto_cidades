<?php

	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$email = $_POST['email'];
	$id_estado = $_POST['estados'];
    $id_cidade = $_POST['cidade'];
	
	include('cabecalho_conexao.php');
	
	$estados = "SELECT nome FROM estados WHERE id=$id_estado";
    $dados_retornados = mysqli_query($con, $estados);
    if(mysqli_num_rows($dados_retornados) > 0){
        
        while (($res = mysqli_fetch_assoc($dados_retornados)) != null) {
            $estados = $res['nome'];
        }
    }
	
	$cidade = "SELECT nome FROM cidades WHERE id=$id_cidade";
    $dados_cidade = mysqli_query($con, $cidade);
    if(mysqli_num_rows($dados_cidade) > 0){
        
        while (($resultado = mysqli_fetch_assoc($dados_cidade)) != null) {
            $cidade = $resultado['nome'];
        }
    }
    
	$SQL = "INSERT INTO pessoas (nome, idade, email, estado, cidade) 
			VALUE ('$nome', '$idade', '$email', '$estados', '$cidade')";
			
	echo'<center><h2>Cadastro bem sucedido!<h2>';
	
	include('rodape_conexao.php');
?>