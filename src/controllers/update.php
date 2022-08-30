<?php

$update = isset($_GET['id']) ? $_GET['id'] : null;
$person = Model::getOne(['id' => $update]);

$pessoa['id'] = isset($_POST['id']) ? $_POST['id'] : $person['id'];
$pessoa['nome'] = isset($_POST['nome']) ? $_POST['nome'] : $person['nome'];
$pessoa['nascimento'] = isset($_POST['nascimento']) ? $_POST['nascimento'] : $person['nascimento'];
$pessoa['profissao'] = isset($_POST['profissao']) ? $_POST['profissao'] : $person['profissao'];
$pessoa['nacionalidade'] = isset($_POST['nacionalidade']) ? $_POST['nacionalidade'] : $person['nacionalidade'];
$pessoa['sexo'] = isset($_POST['sexo']) ? $_POST['sexo'] : $person['sexo'];
$pessoa['peso'] = isset($_POST['peso']) ? $_POST['peso'] : $person['peso'];
$pessoa['altura'] = isset($_POST['altura']) ? $_POST['altura'] : $person['altura'];
$pessoa['cursopreferido'] = isset($_POST['curso']) ? $_POST['curso'] : $person['cursopreferido'];


 
if($update){
    loadTemplate('update',$person);
    
}else{
    if(Model::updatePerson($pessoa)){
        loadTemplate('update',$pessoa + ['msg' => "Alterado com sucesso!"]);
    }

}
    
        

    
