<?php
require_once('SimplexPush.class.php');

$simplex = new SimplexPush('');

$simplex->publish('test', array('param1'=>'1'));

echo "Ok\r\n";


