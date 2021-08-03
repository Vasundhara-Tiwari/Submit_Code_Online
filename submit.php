<html>
    <head>
    <link rel="stylesheet" href="./styles.css">
</head>
<body>
    <div class="page__body" style="height:100vh;">
        <?php
        session_start();
        $userId = trim($_SESSION['userId']);
        $codes=$_POST['codes'];
        $language=$_POST['language'];

        if($language == "Java"){
            $filename="{$userId}.java";
            $text = $codes;
            file_put_contents($filename,$text);
            echo " Your java code submitted successfully<br> ";
        }   
        else {
            $filename="{$userId}.py";
            $text = $codes;
            file_put_contents($filename,$text);
            echo " Your python code submitted successfully<br> ";
        }
        echo "Now you can <a href='./signout.php'>signout</a>.<br> ";
        ?>
    </div>
</body>
</html>