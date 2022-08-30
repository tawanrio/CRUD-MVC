<?php

function loadTemplate($pag, $arr= []){
$arr = $arr;
require_once(realpath(TEMPLATE_PATH . '/header.php'));
require_once(realpath(TEMPLATE_PATH . '/nav.php'));
require_once(realpath(VIEW_PATH . "/${pag}.php"));
require_once(realpath(TEMPLATE_PATH . '/footer.php'));
}

function LoadModel($modelName){
    require_once(MODEL_PATH . "/${modelName}.php");
}
function loadController($controllerName){
    require_once(CONTROLLER_PATH . "/${controllerName}.php");
}
