<?php
ob_start();

// render home page if url is /
if ($url === '/') {
    include("$template_home");
}
// else render another page
else {
    $tpl = $template_folder . '/' .implode('/', $url_parts) . '.html';
    if (@include($tpl)); // @: no errors
    else {
        // if no template for url exists -> 404
        header("HTTP/1.1 404 Not Found");
        include("$template_404");
    } 
}

// get page content
$content = ob_get_clean();

// render base template with content
include("$template_base");

// cleanup
unset($content, $url, $url_parts);
