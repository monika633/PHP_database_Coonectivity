<?php
$conn=mysqli_connect("localhost","root","","monika");
if(!$conn)
{
    echo "coonection error";
}
else{
    
    $query="update student set username='anuja' where username='monika'";
    $res=mysqli_query($conn,$query);
    if($res)
    {
    echo "updated successfully";
    }
    else{
        echo "compilation error";
    }
}









?>