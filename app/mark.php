<?php
require_once 'init.php';

if (isset($_GET['as'] , $_GET['item'])){

    $as=$_GET['as'];
    $item=$_GET['item'];

    switch($as){
        case 'done':
        $doneQuery=$db->prepare('UPDATE items SET  done=1 WHERE id=:item AND user=:user' );
        $doneQuery->execute([
            'user'=>$_SESSION['user_id'],
            'item'=>$item
        ]);
        break;
    }
}
header('location: /index.php');
?>