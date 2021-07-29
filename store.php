<html>
    <head>
    <link rel="stylesheet" href="./loginPage.css">
    </head>
    <body>
    <div class="page__body">
        <?php
        $name=$_POST['t1'];
        $pass=$_POST['t2'];
        $email=$_POST['t3'];
        $uid=date('dNYBHis');
        $file = fopen("details.txt", 'a');
        $text = $name."::".$pass."::".$email."::".$uid."\r\n";
        fwrite($file, $text);
        fclose($file);
     
    ?>
        <div class="success__message">Your account created successfully...<br></div>
            <div class="login-page__link"><a href=loginPage.html>Click Here to login</a><div>
        </div>
    
    </body>

</html>

