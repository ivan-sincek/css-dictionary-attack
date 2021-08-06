<?php
// just a quick API
include_once './php/database.class.php';
include_once './php/query.class.php';
header('Content-Type: application/json; charset=UTF-8');
if (isset($_SERVER['REQUEST_METHOD']) && strtolower($_SERVER['REQUEST_METHOD']) === 'get') {
    if (isset($_GET['v'])) {
        // insert into a table
        // password should have no more than 50 characters
        if (strlen($_GET['v']) >= 1 && strlen($_GET['v']) <= 50) {
            $params = array(
                'ip' => $_SERVER['REMOTE_ADDR'],
                'password' => $_GET['v'],
                'date' => date('Y-m-d H:i:s', time())
            );
            Query::insert('INSERT INTO `passwords` (`ip`, `password`, `date`) VALUES (:ip, :password, :date)', $params);
        }
    } else {
        // select from a table
        $data = Query::select('SELECT `id`, `password`, `date` FROM `passwords`');
        if ($data) {
            echo json_encode($data, JSON_PRETTY_PRINT);
        }
    }
}
?>
