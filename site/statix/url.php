<?php
$url = $_SERVER["REDIRECT_URL"];
$host = $_SERVER["HTTP_HOST"];
$good_host = $config['host'];

/* parsing url */
$url_lower = strtolower(trim($url, '/ '));
$url_parts = explode('/', $url_lower);
$good_url = $url_lower ? '/'.implode('/', $url_parts).'/' : '/';

/* redirecting to seo optimized url if necessary */
if ($host !== $good_host or $url !== $good_url) {
    header("HTTP/1.1 301 Moved Permanently");
    header("Location: http://$good_host$good_url"); 
    exit;
}

/* cleanup */
$url = $good_url;
unset($host, $url_lower, $good_url);
