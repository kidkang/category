<?php 
require_once '../vendor/autoload.php';
use Cate\Tool;
$page = [
    'current_page' => 1,
    'first_page_url' => 'http://127.0.0.1:8000/template?page=1',
    'from' => 1,
    'last_page' => 1,
    'last_page_url' => 'http://127.0.0.1:8000/template?page=1',
    'next_page_url' => 1,
    'path' => 'http://127.0.0.1:8000/template',
    'per_page' => 1,
    'prev_page_url' => 1,
    'to' => 1,
    'total' => 10
];


$page = Tool::pageForAnt($page);
//print_r($page);

$page = Tool::pageForAnt([]);
print_r($page);
?>