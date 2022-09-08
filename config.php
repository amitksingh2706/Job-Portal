<?php
$server='localhost';
$username='root';
$password='';
$database='jobs';

$conn=mysqli_connect($server,$username,$password,$database);
if($conn->connect_error){
    die("Connection failed!".$conn->connect_error);
}
if(isset($_POST['submit'])){ //isset checks that whether if a connection is established or not
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone_no'];
    $password=$_POST['password'];
    $sql = "INSERT INTO `users`(`NAME`,`EMAIL`,`PHONE`,`PASSWORD`) VALUES('$name','$email','$phone','$password')" ;

    if(mysqli_query($conn, $sql)){
    echo "<br><br>Your Registration has been Successful !";
    } else{
        echo"ERROR: Not able to execute $sql. " . mysqli_error($conn);
    }
}
session_start();

if(isset($_POST['Login'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    $query="SELECT * FROM users WHERE `email`='$email' AND `password`='$password'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    // if(mysqli_num_rows($result)==1){
    if($result){
        header("location:index.php");
    } else{
        $error='<br><br>EmailId or Password is Incorrect';
    }
}

if(isset($_POST['apply'])){
    $app_name=$_POST['name'];
    $app_position=$_POST['applying_For'];
    $app_qualification=$_POST['qualification'];
    $app_passing=$_POST['passing_year'];

    $sql = "INSERT INTO `candidates`(`Name`, `Applying For`, `Qualification`, `Year_Passout`) VALUES ('$app_name','$app_position','$app_qualification','$app_passing')";
    mysqli_query($conn,$sql);
     
}


// mysqli_close($conn);

?>