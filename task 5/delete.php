<?php
$server="localhost";
$username="root";
$password="";
$database="letsgrowmore";
$connection=mysqli_connect($server,$username,$password,$database);

if($connection){
    echo "successfull";
}

else{
    die("Error". mysqli_connect_error());
}


    
        $full_name=$_GET["full_name"];
       
        $delete_mysql="DELETE FROM result where full_name = '$full_name'";
        $result=mysqli_query($connection,$delete_mysql);
        
        if ($result){
            header('location: task file.php');
    }
    else{echo'something went wrong';}
    
    ?>
    
   