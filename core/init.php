<?php
spl_autoload_register(function($class){
  require_once "classes/".$class.".php";
});
require_once "./header.php";
?>
