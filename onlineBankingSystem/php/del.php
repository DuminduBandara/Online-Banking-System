<?php require_once './connect.php' ?>

<?php
    session_start();

    $sql2 = ($connection->query("DELETE FROM loan WHERE AccountNo = '$_SESSION[getAccount]'"));
    $sql1 = ($connection->query("DELETE FROM useraccount WHERE Username = '$_SESSION[username]'"));

    if($sql1 && $sql2){
        header("Location:../html/login.html");
    }

?>

<?php $connection->close(); ?>