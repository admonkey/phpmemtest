#!/usr/bin/env php
<?php
$memory_start = memory_get_usage();
echo 'START '.$memory_start.PHP_EOL;
for($i=0;$i<100;$i++)
  echo $i.(memory_get_usage()-$memory_start).PHP_EOL;
echo 'DONE: '.(memory_get_usage()-$memory_start).PHP_EOL;
echo 'PEAK: '.(memory_get_peak_usage()).PHP_EOL;
