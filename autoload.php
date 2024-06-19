<?php 
spl_autoload_register(function($classPath){
    require $classPath .".php";
});
