<?php

$DBdata = array (

    'server'    => 'localhost',
    'database'  => 'pm2',
    'username'  => 'root',
    'password'  => ''

);

$db = mysqli_connect($DBdata['server'],$DBdata['username'],$DBdata['password'],$DBdata['database']);
