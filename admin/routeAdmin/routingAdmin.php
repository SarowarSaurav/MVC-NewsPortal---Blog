<?php
$host = explode('?', $_SERVER['REQUEST_URI'])[0];
$num = substr_count($host, '/');
$path = explode('/', $host)[$num];

if ($path == '' or $path == 'index.php') {
    
    $response = ControllerAdmin::formLoginSite();
}

elseif ($path == 'login') {
    
    $response = ControllerAdmin::loginAction();
} elseif ($path == 'logout') {
    
    $response = ControllerAdmin::logoutAction();
}

elseif ($path == 'newsAdmin') {
    $response = ControllerAdminNews::newsList();
}
elseif ($path == 'newsAdd') {
    $response = ControllerAdminNews::newsAddForm();
}
elseif ($path == 'newsAddResult') {
    $response = ControllerAdminNews::newsAddResult();
}
elseif ($path == 'newsEdit' && isset($_GET['id'])) {
    $response = ControllerAdminNews::newsEditForm($_GET['id']);
}
elseif ($path == 'newsEditResult' && isset($_GET['id'])) {
    $response = ControllerAdminNews::newsEditResult($_GET['id']);
}
elseif ($path == 'newsDel' && isset($_GET['id'])) {
    $response = ControllerAdminNews::newsDeleteForm($_GET['id']);
} elseif ($path == 'newsDelResult' && isset($_GET['id'])) {
    $response = ControllerAdminNews::newsDeleteResult($_GET['id']);
}
else {
    $response = ControllerAdmin::error404();
}
