<?php
$con=mysqli_connect("localhost","root","","monika");
if(!$con)
{
    echo "connection error";
}
else{
    
    $query="delete from student where username='anuja'";
    $res=mysqli_query($con,$query);
   
    if($res)
    {
        echo "deleted".$res;
    
    }else{
        echo "compilation error";
    }
    
    
    
    
}



?>