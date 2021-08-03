<?php
$email=$_POST['email'];
$psw=$_POST['password'];

$flag=0;
$s=array();
$file = fopen("details.txt", 'r');
while(!feof($file)) {

  $s=fgets($file);
  $str_arr = array_pad(explode('::', $s),3,null);
  
  if ($str_arr[1]==$psw and $str_arr[2]==$email){
  
    session_start();
    $_SESSION['email']=$email;
    $_SESSION['last_login'] = time();
  
    header("refresh: 0; url=./Evaluation.php");
	
    echo "Authorized User";
    echo "<a href='./Evaluation.php'>Click here </a> to proceed for your evaluation";
	
    $flag=1;
	  	break;
	}
}//end while
if ($flag==0)
	echo "Please register before login";
fclose($file);
?>
