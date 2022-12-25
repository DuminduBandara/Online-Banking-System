<?php require_once './connect.php' ?>

<?php

    if(isset($_POST['login'])){
        
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql= "SELECT * FROM useraccount WHERE Username = '$username' AND Apassword = '$password' ";
        
        $result = mysqli_query($connection, $sql);

        if(mysqli_num_rows($result) == 1){
            session_start();

            $_SESSION['username'] = $username;

            header('location:../html/home.html');
        }
        else{
            header('location:./log-error.php');
        }
    }

?>


<?php $connection->close() ?>
