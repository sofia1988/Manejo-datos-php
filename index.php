<?php
require __DIR__.'/vendor/autoload.php';

       
var_dump(App\Validate::email("soft@outlook.com"));
var_dump(App\Validate::url("https://platzi.com"));
var_dump(App\Validate::password("1234567"));