<?php

$conn=mysqli_connect("localhost","root","","monika");
if(!$conn){
    echo "connection error";}
else{
    $user=$_POST['username'];
$pass=$_POST['password'];
    if(isset($_POST['submit'])){
        
    $query="insert into student (username,password) values('$user','$pass')";
    
    $res=mysqli_query($conn,$query);
    if($res)
    {
        echo "inserted.";
    }
    else{
        echo "error";
    }
    }
}
 mysqli_close($conn);       
?>