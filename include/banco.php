<?php

require 'config_db.php';

function conectar($link){

	return mysqli_connect(
		"{$link['host']}",
		"{$link['user']}",
		"{$link['password']}",
		"{$link['dbname']}");
	
}

$link = conectar($config);

function insert($tabela, $dados) 
{
	global $link;
	foreach ($dados as $campo => $valor)
	{
		$campos[] = $campo;
		$valores[] = "'$valor'";
		
	}
	$campos  = implode(', ',$campos);
	$valores = implode(', ',$valores);
	
	// INSERT INTO tabela(campos) VALUES(valores)
	$query = "INSERT INTO $tabela($campos) VALUES($valores)";
	
	return mysqli_query ( $link, $query );

	
}

function update($tabela, $where , $dados) 
{
	//UPDATE tabela SET campo = 'valor' WHERE condicao
	
	global $link;
	foreach($dados as $campo => $valor)
	{
		$sets[] = "$campo='$valor'";
		
	}
	
	$sets = implode(', ',$sets);
	$query = "UPDATE $tabela SET $sets WHERE $where";
	
	$result = mysqli_query($link, $query); 
	return $result;
	
}

function delete($tabela, $where) 
{
	// DELETE tabela WHERE condiçao
	$query = "DELETE FROM $tabela WHERE $where";
	global $link;
	return mysqli_query( $link, $query );
}

function select($tabela, $where=null, $order=null, $limite=null, $campos = '*') 
{
	// SELECT * FROM tabela WHERE condicao ORDER BY ordem LIMIT limite
	$query = "SELECT $campos FROM $tabela";
	
	if($where){
		$query .= " WHERE $where";
	}
	if($order){
		$query .= " ORDER BY $order";
	}
	if($limite){
		$query .= " LIMIT $limite";
	}
	
	global $link;
	$result = mysqli_query( $link , $query );
	
	return mysqli_fetch_all( $result , MYSQLI_ASSOC );
}

function ver($tabela, $where, $campos ='*')
{
	// SELECT campos FROM tabela WHERE condicao
	$query = "SELECT $campos FROM $tabela WHERE $where";
	
	global $link;
	$result = mysqli_query($link, $query);
	
	$result = mysqli_fetch_assoc($result);

	return $result;
}
