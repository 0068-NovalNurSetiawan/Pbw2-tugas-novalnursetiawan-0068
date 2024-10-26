<?php
require_once 'config/database.php';
require_once 'app/controllers/usercontroller.php';

// koneksi ke database
$dbconnection = getdbconnection();


$action = isset($_GET['action']) ? $_GET['action'] : 'index';
$id = isset($_GET['id']) ? intval($_GET['id']) : null;

$controller = new usercontroller($dbconnection);

    
switch ($action) {
    case 'detail':
        $controller->show($id);
        break;
    case 'edit':
        $controller->edit($id);
        break;
    case 'delete':
        $controller->delete($id);
        break;
    case 'index':
    default:
        $controller->index();
        break;
}
?>
