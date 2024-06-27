<?php
//Configuration
 ini_set('display_errors', 'on');
 error_reporting(E_ALL);

 class MyAutoload{

    public static function start()
    {
        spl_autoload_register(array(__CLASS__, 'autoload'));

        $root = $_SERVER['DOCUMENT_ROOT'];
        $host = $_SERVER['HTTP_HOST'];


        define('HOST', 'http://'.$host.'/test_orange2024/');
        /** ==================================================================== */
        define('ROOT', $root.'/test_orange2024/');

        define('CONTROLLER', ROOT.'controller/');
        define('MODEL', ROOT.'model/');
        define('VIEW', ROOT.'view/');
        define('CLASSES', ROOT.'classes/');
        define('ADMIN', ROOT.'admin/');

        
        define('ASSETS', HOST.'assets/');
        define('IMAGES', ASSETS.'images/');

        define('ASSET', ROOT.'assets/');
        define('IMAGE', ASSET.'images/');
        

    }

    public static function autoload($class)
    {
        if (file_exists(MODEL.$class.'.php')) 
        {
            include_once (MODEL.$class.'.php'); 
              # code...
        }elseif (file_exists((CLASSES.$class.'.php'))) 
        {
            include_once (CLASSES.$class.'.php');
            # code...
        }elseif (file_exists((CONTROLLER.$class.'.php')))
        {
            include_once (CONTROLLER.$class.'.php');
            # code...
        }

    }
 }
 

 
