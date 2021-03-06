<?php
// php8_num_str_empty_needle.php
function test($haystack, $search) {
    $pattern = '%15s | %15s | %10s' . "\n";
    $result  = (strpos($haystack, $search) !== FALSE)
             ? 'FOUND'
             : 'NOT FOUND';
    return sprintf($pattern,
           var_export($search, TRUE),
           var_export(strpos($haystack, $search), TRUE),
           $result);
};

$haystack = 'Something Anything 0123456789';
$needles = ['', NULL, FALSE, 0];
foreach ($needles as $search)
    echo test($haystack, $search);

