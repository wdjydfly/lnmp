<?php
$redis = new Redis();
$redis->connect('172.30.0.3', 6379);
echo "Connection to server successfully </br>".PHP_EOL;

if ($redis->ping()) {
    $color = 'green';
    $state = 'running';
} else {
    $color = 'red';
    $state = 'stop';
}
echo "Server state: <span style=\"color: {$color}\">{$state}</span> <br/>".PHP_EOL;

$redis->set('words','hello redis~');
echo "Stored string in redis:: <span style=\"color: green\">{$redis->get('words')}</span> <br/>".PHP_EOL;