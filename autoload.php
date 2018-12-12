<?php

function Controllers_autoload($classname){
    include 'controllers/'. $classname. '.php';
}

spl_autoload_register('Controllers_autoload');