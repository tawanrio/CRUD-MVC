<?php
date_default_timezone_set('America/Sao_Paulo');
setlocale(LC_TIME,'pt_BR','pt_BR.utf-8','portuguese');

// PASTAS

define('VIEW_PATH' , realpath(dirname(__FILE__) . '/../views'));
define('TEMPLATE_PATH' , realpath(dirname(__FILE__) . '/../views/templates'));
define('MODEL_PATH' , realpath(dirname(__FILE__) . '/../models'));
define('CONTROLLER_PATH' , realpath(dirname(__FILE__) . '/../controllers'));

// ARQUIVOS

//require_once(realpath(dirname(__FILE__,2) . '/views/template/principal.php'));
require_once(realpath(dirname(__FILE__) . '/loader.php'));
require_once(realpath(dirname(__FILE__) . '/Database.php'));
require_once(realpath(MODEL_PATH . '/Model.php'));
require_once(realpath(MODEL_PATH . '/User.php'));