<!doctype HTML>
<html>
	<head>
		<title>signup</title>
		<meta charset="UTF-8">   <!-- to use emoji --> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
       
	</head>
	<body>
 <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $name = $_POST['fname'];
      $email = $_POST['email'];
      $desc = $_POST['desc'];
      $lname = $_POST['lname'];
      $passwd = $_POST['passwd'];

      
    
    // Connecting to the Database
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "contacts";

    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{ 
      // Submit these to a database table which we created earlier 
      // Sql query to be executed 
       $sql = "INSERT INTO `contactus` (`name`, `Last name`, `email`, `concern`, `password`, `dt`) VALUES ('$name', '$lname', '$email', '$desc ', '$passwd', current_timestamp())";

      $result = mysqli_query($conn, $sql);

      if($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your entry has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      }
      else{
          // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> We are facing some technical issue and your entry ws not submitted successfully! We regret the inconvinience caused!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      }

    }

  }


?>


<div>
        <form action="/codewithharryphp/datasaving5.php" method="post"  style="border:1px solid rgb(226, 
          218, 218)" >


    <h1>Create Account </h1>
    <p> Please fill in this form to create an account.</p>
    <hr>

    <label for="text"><b>First Name</b></label>
    <input type="text" placeholder="First Name" name="fname" required> 

    <label for="text"><b>Last Name</b></label>
    <input type="text" placeholder="Last Name" name="lname" required>
    
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required>
  

    <label for="passwd"><b>Password</b></label>
    <input type="text" placeholder="Enter Password" name="passwd" required>
 


    <div>
    
    <label for="desc">Description</label>
    <textarea class="form-control" name="desc" id="desc" cols="30" rows="10"></textarea> 

    </div>
    
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
    </label>
    
    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

    <div class="clearfix">
      <input type="submit" name="sb">
    </div>
  </div>
</form>
        
    
  




	</body>
</html>
