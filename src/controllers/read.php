<?php

$busca = isset($_POST['selectDb']) ? $_POST['selectDb'] : null;
$select = isset($_POST['select']) ? $_POST['select'] : null;

if($busca && $select){
    $getQueryDb = Model::get([$select => $busca]);
    loadTemplate('read', $getQueryDb);
}else{
    loadTemplate('read');
}
