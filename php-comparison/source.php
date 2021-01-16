<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username']; $password = $_POST['password'];
        if(strlen($username) == 14 && strlen($password) == 14 && $username != $password && md5($username) == md5($password)){
            $_SESSION['login'] = true; header('LOCATION:flag.php'); die();
        	}
        {
          echo "<div class='alert alert-danger'>Username and Password do not satisfy the criteria.</div>";
        }
    }
?>