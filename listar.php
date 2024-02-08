<?php

//Incluir a conexão com o banco de dados
include_once "conexao.php";

//Receber a página atual via método GET
$pagina = filter_input(INPUT_GET, "pagina", FILTER_SANITIZE_NUMBER_INT);

//Verificar se a página não está vazia



