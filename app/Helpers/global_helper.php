
<?php

if (!function_exists('truncate')) {
    function truncate(string $string, int $limit = 100)
    {
        return \Str::limit($string, $limit, '...');
    }
}
























