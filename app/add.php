<?php
require_once 'init.php';

if (isset($_POST['name']))
{
    $name= trim($_POST['name']);

    if (!empty($name)){

        $addedQuery= $db->prepare("INSERT INTO items (name,user,done,created) 
        VALUES (:name,:user,0,Now())");

        $addedQuery->execute([
            'name'=> $name,
            'user'=> $_SESSION['user_id']
        ]);
    }
}

header('location: /index.php');

?>