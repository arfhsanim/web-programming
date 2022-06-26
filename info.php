<?php
$con = mysqli_connect('localhost','root');
if($con)

{
    echo "Connection Successful";

}
else{
    echo"No Connection";
}
mysqli_select_db($con,'root_mart');
$user = $_POST['username'];
$pass = $_POST['pass'];

$query="insert into info(user,pass)
values('$user','$pass')";
mysqli_query($con,$query);
header('location:account.php');
?>