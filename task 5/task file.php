<?php
$server="localhost";
$username="root";
$password="";
$database="letsgrowmore";
$connection=mysqli_connect($server,$username,$password,$database);

if($connection){
   // echo "successfull";
}

else{
    die("Error". mysqli_connect_error());
}
//connectivity code with database php

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $full_name=$_POST["full_name"];
    $class=$_POST["class"];
    $subject=$_POST["subject"];
    $marks=$_POST["marks"];
    $insert_mysql="INSERT INTO result(`full_name`,`class`,`subject`,`marks`) VALUES('$full_name','$class','$subject','$marks')";
    $result=mysqli_query($connection,$insert_mysql);
}

else{
    //echo"duplicate data, invalid input";
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
   
    <title>Student Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="mt-5 pt-5 pl-3" style="background:linear-gradient(90deg,#fc855a,#9c9bff,#fadb7d);">
<!--card started outer 1-->
<div class="card col-lg-11   pb-5 " style="width:95%; background: rgba( 255, 255, 255, 0.25 );box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 40px );border-radius: 10px;border: 1px solid rgba( 255, 255, 255, 0.18 );" >
	<!--container start-->
<div class="container ">
		<div class="main-body">
			<div class="row">
				
					<!--card image card -->
					
							
					
				
				<!--card style ended-->
				<div class="col-lg-6 mt-5 pl-5">
					<!--card form-->
					<div class="card"  style="width:95%; background: rgba( 255, 255, 255, 0.25 );box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );backdrop-filter: blur( 4px );
					-webkit-backdrop-filter: blur( 40px );border-radius: 10px;border: 1px solid rgba( 255, 255, 255, 0.18 );" >
					
						<div class="card-body">
							<form action="task file.php" method="post">
						      <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Full Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="full_name" id="full_name" placeholder="enter your name ">
								</div>
							 </div>

					    <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Class</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="class" id="class" placeholder="enter your class" required>
								</div>
							</div>

							<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Subject</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" class="form-control" name="subject" id="subject" iplaceholder="enter your subject">
									</div>
							</div>

							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Marks</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="marks" id="marks" placeholder="enter marks">
								</div>
							</div>
							
							
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="submit" class="btn btn-primary px-4" value="Submit">
								</div>
							</div>
						</div>

						</form>
						
					</div>
					
				</div>
			</div>
			<!--row ended-->
		</div>
	</div>

</div>

	<div class='col-lg-12'>
<div class= "row">
<?php
					
									
                                    $select_mysql="SELECT * FROM result";
$sql=mysqli_query($connection,$select_mysql);
    while($row=mysqli_fetch_assoc($sql)){
        $full_name=$row['full_name'];
    $class=$row['class'];
    $subject=$row['subject'];
    $marks=$row['marks'];   
    echo "
    <div class='col-lg-4 mt-3'>

    <div class='card pb-5 ' style='font-size:small; width:95% background: rgba( 255, 255, 255, 0.25 );box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );backdrop-filter: blur( 4px );
    -webkit-backdrop-filter: blur( 40px );border-radius: 10px;border: 1px solid rgba( 255, 255, 255, 0.18 );' >
            <div class='card-body'>
                <div class='d-flex flex-column align-items-left text-left'>
                                       <div class='mt-1'>
                    <p class='text-secondary'> Name:  $full_name</p>
                    <p class='text-secondary'> Class:  $class</p>
                    <p class='text-secondary'> Subject:  $subject</p>
                    <p class='text-secondary'> Marks:  $marks</p>
                    <a class='btn btn-primary' href='update.php?full_name=$full_name'>Edit</a>
                    <a class='btn btn-danger' href='delete.php?full_name=$full_name'>delete</a>
                   </div>
             </div>
    
            </div>
        </div>
    </div>
        ";


}
?>
</div>				
</div>				
		
<br><br>

<style type="text/css">
body{

    margin-top:20px;
}


</style>

<script type="text/javascript">

</script>
</body>
</html>