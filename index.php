<?php
#Router
#URL analysieren und den entsprechenden Controller aufrufen

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'admin';

$action = isset($_GET["action"])? $_GET["action"]:"index";

#controllerdatei einbinden
include "controllers/".ucfirst($controller)."Controller.php"; //bastelt den namen der zu ladenden datei zusammen

#controller instanz // ein objekt erstellen
$controllerName = ucfirst($controller)."Controller";

$controller = new $controllerName;

//Action aufrufen
$controller->$action();
