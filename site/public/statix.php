<?php
// load an check configuration
include('../statix/config.php');

$template_folder = '../' . $config['template_folder'];
$template_base =  '../' . $config['template_folder'] . '/' . $config['template_base'];
$template_404 =  '../' . $config['template_folder'] . '/' . $config['template_404'];
$template_home =  '../' . $config['template_folder'] . '/' . $config['template_home'];

is_dir($template_folder) or die("Configuration Error: Template folder not found");
file_exists($template_base) or die("Configuration Error: Base template not found");
file_exists($template_404) or die("Configuration Error: 404 template not found");
file_exists($template_home) or die("Configuration Error: Home template not found");

// parse url
include('../statix/url.php');

// render content
include('../statix/render.php');

unset($config, $template_folder, $template_404, $template_home, $template_base);
