<?php
session_start();
session_destroy();
$_SESSION = array();
var_dump($_SESSION);

include 'index.html';