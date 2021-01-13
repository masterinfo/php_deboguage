<?php

$config = ['name' => 'My PHP Website',];

function siteName()
{
    global $config;

    return $config['name'];
}

function pageTitle()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'home';

    return ucfirst(str_replace('-', ' ', $page));
}

function pageContent()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $path = getcwd().'/pages/'.$page.'.php';


    $content = file_exists($path) ? file_get_contents($path) : file_get_contents('pages/404.php');

    return $content;
}
