<?php
$conn=mysqli_connect("localhost","root","","monika");
if(!$conn){
    echo "connection error";
}
else{
    $query="select * from employee";
    $res=mysqli_query($conn,$query);
    
    if(mysqli_num_rows($res)>0)
    {    echo "<table border='1'>
    
        <tr>
            <th>Emp-id</th>
            <th>Employee Name</th>
            <th>post</th>
            <th>salary</th>
            
        </tr>";
        while($row=mysqli_fetch_assoc($res))
        {     
             echo"<tr>";
            echo "<td>".$row['employeeId']."</td>";
                         
                 echo"<td>".$row['employeeName']."</td>";
                echo"<td>".$row['post']."</td>";
                 echo"<td>".$row['salary']."</td>";
                
        }
    
     echo "</table>";
     
    }
    
}
?>