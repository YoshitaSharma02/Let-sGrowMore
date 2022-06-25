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

$select_mysql="SELECT * FROM result";
$sql=mysqli_query($connection,$select_mysql);
    while($row=mysqli_fetch_assoc($sql)){
        $full_name=$row['full_name'];
    $class=$row['class'];
    $subject=$row['subject'];
    $marks=$row['marks'];   
    }

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $full_name=$_GET["full_name"];
        $subject=$_POST["subject"];
        $marks=$_POST["marks"];
        $update_mysql="UPDATE  result SET subject= '$subject',marks= '$marks' where full_name = '$full_name'";
        $result=mysqli_query($connection,$update_mysql);
        
        if ($result){
            header('location: task file.php');
    }
    else{echo'something went wrong';}
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
							<form action="" method="post">
						      <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Full Name</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="full_name" id="full_name" value="<?php echo $full_name?>" disabled>
								</div>
							 </div>

					    <div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Class</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="class" id="class" value="<?php echo $class?>" disabled>
								</div>
							</div>

							<div class="row mb-3">
									<div class="col-sm-3">
										<h6 class="mb-0">Subject</h6>
									</div>
									<div class="col-sm-9 text-secondary">
										<input type="text" class="form-control" name="subject" id="subject" value="<?php echo $subject?>">
									</div>
							</div>

							<div class="row mb-3">
								<div class="col-sm-3">
									<h6 class="mb-0">Marks</h6>
								</div>
								<div class="col-sm-9 text-secondary">
									<input type="text" class="form-control" name="marks" id="marks" value="<?php echo $marks?>">
								</div>
							</div>
							
							
							<div class="row">
								<div class="col-sm-3"></div>
								<div class="col-sm-9 text-secondary">
									<input type="submit" class="btn btn-primary px-4" value="update">
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