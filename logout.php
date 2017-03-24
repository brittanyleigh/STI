<?php
session_start();
session_destroy();
$_SESSION = array();

include 'index.html';