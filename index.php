<?php
session_start();
require './vendor/autoload.php';

$url = new \Core\ConfigController();
$url->pageLoad();