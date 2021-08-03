<?php
        session_start();
        $_SESSION['userId']=null;
        $_SESSION['email']=null;
        $_SESSION['last_login']=null;
        header("refresh: 0; url=./loginPage.html");
        
        ?>