<?php

// default number for test iterations
if(isset($argv[4])) $iterations = $argv[4];
else $iterations = 1000000;

// get include file
require_once($argv[1]);

$before = microtime(true);
for ($i=0; $i<$iterations; $i++) {
    $argv[2]($argv[3]);
}
$after = microtime(true);

echo 'Time (ms):   '.($after-$before)/$i.PHP_EOL;
echo 'Peak Memory: '.(memory_get_peak_usage()).PHP_EOL;
