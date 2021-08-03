
<html>
    <head>
    <link rel="stylesheet" href="./Evaluation.css">
    </head>
    <body>
      
        <div class="page__body">
        <div class="companyName">
            Status Infotainment
        </div>
        <h2 class="heading">
        Evaluation Panel
        </h2>
        <div class="question__panel">
        <?php
          session_start();
          if(empty($_SESSION['email'])){
            echo "You are not signed in";
            echo " <div ><a href='./loginPage.html' style='color:red;'>Click here to sign in</a></div>";
          }
          else{
            $flag=0;
            $s=array();
            $file = fopen("details.txt", 'r');
            while(!feof($file))
            {
              $s=fgets($file);
              $str_arr = array_pad(explode('::', $s),4,null);
                  $_SESSION['userId']=$str_arr[3];
                  $filenum=$str_arr[3]%20;
                  $filenum++;
                  $filename=strval($filenum).".txt";
                  echo "<div class='problem__heading'>User Id: $str_arr[3]</div>";
                  
                  echo "<br>";
                  echo "<br>";

                  echo "<div class='problem__heading'>Problem Statement</div>";
                  echo "<br>";
                  echo readfile("./$filename");
                  echo "<br/>";                    
                  echo "<br/>";
                  echo "<br/>";
                  echo '
                  <div class="code__editor">
                  <form action="assignment.php" method="POST">
                      <div class="custom-select">
                      Select Language
                        <select name="language" class="select">
                          <option value="Python"> Python </option>
                          <option value="Java"> Java </option>
                        </select>
                      </div>
                      <br>
                      <textarea name="codes" class="textinput" required placeholder="write your code here"></textarea>
                      <br>
                      <input type=submit value=Submit>
                  </form>
                </div>';
                $flag=1;
                break;
            } 
              if ($flag==0)
              echo '<div class="success__message">Please register before login</div>';
              fclose($file);
          		$flag=1;
          }
            ?>
        
          </div>
            
          
    </body>

</html>



