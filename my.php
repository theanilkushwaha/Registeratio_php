   <?php

if(isset($_POST['submit'])) {
    
   $username  = $_POST['username'];
   $email     = $_POST['email'];
   $phone     = $_POST['phone'];
   $dob       = $_POST['dob'];

   $host = 'localhost';
   $user = 'root';
   $pass = '';
   $dbname = 'mydb';

   $conn = mysqli_connect($host,$user,$pass,$dbname);

   $sql = "INSERT INTO details(username,email,phone,dob) VALUES('$username','$email', '$phone','$dob')";

   mysqli_query($conn,$sql);

}

echo "<h1 style ='background-color: black;
color: white;'> ❄️ DEV COMMUNITY</h1><div style ='text-align: center;
'><h1><span style='color:black; font-size:7rem; text-align:center;'>Welcome ! </span></h1> <h2 style='font-size:4rem'>$username To Our Community...</h2>
</div>";

?>
