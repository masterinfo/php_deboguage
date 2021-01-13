<?php

error_reporting(E_ALL);

$config = ['name' => 'My PHP Website',];

var_dump($config); die;

function siteName()
{
    global $config;

    echo $config['name'];
}

function pageTitle()
{
    $page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'home';

    echo ucwords(str_replace('-', ' ', $page));
}

function pageContent()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $path = getcwd().'/pages/'.$page.'.php';

    if (file_exists($path)) {
        include $path;
    } else {
        include 'pages/404.php';
    }
}
