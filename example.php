<?php
require_once __DIR__ . '/SimplexPush.class.php';

$simplex = new SimplexPush('');

$simplex->publish('my_first_event', array('param1'=>'1'));

echo "Ok\r\n";


//$simplex->_exec(SimplexPush::POST, 'http://127.0.0.1:8080/api/', array('e'=>'test_event', 'pk'=>'rxEraqqvCbKJVJfPLMFpKGwDrETZGIDr'));

