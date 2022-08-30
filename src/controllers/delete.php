<?php
$delete = isset($_GET['id']) ? $_GET['id'] : null;

if(Model::deletePerson($delete)){
    
loadTemplate('home');
}

?>