<?php
//Часть 1

//$str = file_get_contents('http://old.code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/1/1.php');
// 1
/*preg_match_all('#<title>(.+?)</title>#su', $str, $head);
preg_match_all('#<head>(.+?)</head>#su', $str, $title);
preg_match_all('#<body[^>]*?>(.+?)</body>#su', $str, $body);
var_dump($head);
var_dump($title);
var_dump($body);*/

//2
/*preg_match_all('#<a[^>]+?href\s*?=\s*?(["\'])(.*?)\1[^>]*?>.*?</a>#su', $str, $href);
var_dump($href);*/

//3
/*preg_match_all('#<a.+?>(.*?)</a>#su', $str, $text);
var_dump($text);*/

//Часть 2
//4
$str = file_get_contents('http://old.code.mu/exercises/advanced/php/parsing/parsing-sajtov-regulyarnymi-vyrazeniyami-php/2/1.php');
/*preg_match_all('#<body[^>]*?>(.+?)</body>#su', $str, $body);
var_dump($body[1]);*/

//5
/*preg_match_all('#<meta\s+(.+?)\s*>#su', $str, $meta);
var_dump($meta);*/

//6
/*preg_match_all('#<div[^>]+?id\s*?=\s*?(["\'])content\1[^>]*?>(.+?)</div>#su', $str, $content);
var_dump($content);*/

//7
/*preg_match_all('#<div[^>]+?id\s*?=\s*?(["\'])content\1[^>]*?>(.+?)</div>#su', $str, $content);
$links = $content[2][0];
preg_match_all('#<a.*?</a>#', $links, $link);
var_dump($link);*/

//8
/*preg_match_all('#<p.*?>\s*(.*?)\s*</p>#su', $str, $p);
var_dump($p);*/

//9
/*preg_match_all('#<p.*?>\s*(.*?)\s*</p>#su', $content[2][0], $p);
var_dump($p);*/

//10
/*preg_match_all('#<p\s+?class\s*?=\s*?(["\'])www\1\s*?>\s*(.*?)\s*</p>#su', $str, $p);
var_dump($p);*/

//11
preg_match_all('#<a\s+?class\s*?=\s*?(["\'])www\1\s*?>(.*?)</a>#su', $str, $a);
var_dump($a);