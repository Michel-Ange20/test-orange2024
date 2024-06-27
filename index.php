<?php
include_once('_config.php');

MyAutoload::start();
//$request = $_GET['r'];

    if (isset($_GET['r'])) 
    {
        $request = $_GET['r'];
        $routeur = New Routeur($request);
        $routeur->renderController();

    }else
    {
        header('Location:'.HOST.'home');           
    }

    

