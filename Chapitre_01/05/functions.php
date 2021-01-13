<?php

$config=['name' => 'My PHP Website',];
function sitename()
{
    global $config;
    echo $config['name'];
}

function pageTitle()
{
    $page=isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'home';
    echoucwords(str_replace('-', ' ', $page));
}
function pageContent()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';

    $path = getcwd().'/pages/'.$page.'.php';
    if (file_exists($path)) {nclude $path;} else {include 'pages/404.php';}
}