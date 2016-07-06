<?php
require_once('SimplexPush.class.php');
$simplex = new SimplexPush();
$simplex->_exec(SimplexPush::GET, 'http://nexus.simplexpush.com/api/');
echo "Ok\r\n";
