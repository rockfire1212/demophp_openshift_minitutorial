<?php
$con=mysqli_connect("localhost","root","abcd123","dummyopenshift");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

else {
    echo "Hello";

}// ...some PHP code for database "my_db"...

// Change database to "test"


mysqli_close($con);
?> 