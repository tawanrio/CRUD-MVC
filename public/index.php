<?php
require_once('../src/config/config.php');

$page = isset($_GET['page']) ? $_GET['page'] : 'home';

loadController($page);



 
    