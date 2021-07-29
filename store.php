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
        
    </body>

</html>

