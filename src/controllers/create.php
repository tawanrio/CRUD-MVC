<?php
$pessoa['nome'] = isset($_POST['nome']) ? $_POST['nome'] : null;
$pessoa['nascimento'] = isset($_POST['nascimento']) ? $_POST['nascimento'] : null;
$pessoa['profissao'] = isset($_POST['profissao']) ? $_POST['profissao'] : null;
$pessoa['nacionalidade'] = isset($_POST['nacionalidade']) ? $_POST['nacionalidade'] : null;
$pessoa['sexo'] = isset($_POST['sexo']) ? $_POST['sexo'] : null;
$pessoa['peso'] = isset($_POST['peso']) ? $_POST['peso'] : null;
$pessoa['altura'] = isset($_POST['altura']) ? $_POST['altura'] : null;
$pessoa['cursopreferido'] = isset($_POST['curso']) ? $_POST['curso'] : null;


$pessoa = array_filter($pessoa);

if($pessoa){

    loadTemplate('create', $pessoa);
    }
    loadTemplate('create');
