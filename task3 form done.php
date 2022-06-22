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

if(isset($_POST['delete'])) {
    $delete_display="delete from student" ;
                   $sql1 = mysqli_query($connection,$delete_display);
}

if(isset($_POST['submit'])){
    $full_name=$_POST["full_name"];
    $email=$_POST["email"];
    $rollno=$_POST["rollno"];
    $phone=$_POST["phone"];
    $insert_mysql="INSERT INTO student(`full_name`,`email`,`rollno`,`phone`) VALUES('$full_name','$email','$rollno','$phone')";
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
				<div class="col-lg-6 mt-5 pl-5">
					<!--card form-->
					<div class="card"  style="width:95%; background: rgba( 255, 255, 255, 0.25 );box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );backdrop-filter: blur( 4px );
					-webkit-backdrop-filter: blur( 40px );border-radius: 10px;border: 1px solid rgba( 255, 255, 255, 0.18 );" >
					
								<div class="card-body">
						<form action="#" method="post">
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
									<h6 class="mb-0">Roll No</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="rollno" id="rollno" pattern="^\[D]{3,4}-\D{3,4}-\d{4,4}-\d{2,2}-\d{3}$" placeholder="fos-bds-2020-23-003" style="text-transform: uppercase;" required>
								</div>
							</div>

							<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Email</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" class="form-control" name="email" id="email" iplaceholder="(239) 816-9029">
									</div>
							</div>

							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Phone</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="phone" id="phone" placeholder="(320) 380-4539">
								</div>
							</div>
							
							
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="submit"name="submit" class="btn btn-primary px-4" value="Enroll">
									
								</div>
								</div>
							</div>

						</form>
						<form action="#" method="post">
						<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
						      <button type="submit" name="delete" class="btn btn-danger text-center ml-3">Delete</button>
</div>
</div> 
                         </div>
                         </form>
						</div>
					
					</div>
				</div>
			</div>
</div>
</div>
				
					<!--card image card -->
					<div class='col-lg-12'>
					<div class= "row">
					
					<?php
					
									
    $select_mysql="SELECT * FROM student";
$sql=mysqli_query($connection,$select_mysql);
    while($row=mysqli_fetch_assoc($sql)){
        $full_name=$row['full_name'];
    $email=$row['email'];
    $rollno=$row['rollno'];
    $phone=$row['phone'];   
    echo "
    <div class='col-lg-3 mt-5'>

    <div class='card pb-5 ' style='font-size:small; width:100% background: rgba( 255, 255, 255, 0.25 ) !important;box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 ) !important;backdrop-filter: blur( 4px );
    -webkit-backdrop-filter: blur( 40px );border-radius: 10px;border: 1px solid rgba( 255, 255, 255, 0.18 );' >
            <div class='card-body'>
                <div class='d-flex flex-column align-items-left text-left'>
                                       <div class='mt-1'>
                    <p class='text-secondary'> Name: $full_name</p>
                    <p class='text-secondary'> Email: $email</p>
                    <p class='text-secondary'> Rollno: $rollno</p>
                    <p class='text-secondary'> Phone: $phone</p>
                
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