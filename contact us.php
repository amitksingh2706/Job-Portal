<?php include 'config.php' ?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="This is a website which will provide you a coach to achieve any goal in life by providing you a proper direction and they will help you to hustle your way to success.">
    <meta name="keywords" content="hustle,motivation,grind,success,leadership,goal">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="dashboard.css" rel="stylesheet">
    <title>CONTACT US</title>
</head>

<body style="background-image:url(location.png);background-size:cover;">

    <!-- Optional JavaScript; choose one of the two! --

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    <div>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
        <a class="navbar-brand"  href="contact us.php">CONTACT US</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
          <a class="nav-link active" style="padding-left:80px;" aria-current="page" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="about us.php">ABOUT US</a>
          </li>
          <li class="nav-item">
          <a class="nav-link active" href="contact us.php">CONTACT US</a>
          </li>
        </ul>
        </div>
        </div>
      </nav>
    <!-- The sidebar -->
        <div class="sidebar" style="margin-top: 56px;padding: 0;width: 200px;background-color: #f1f1f1;position: fixed;height: 100%;overflow: auto;">
        <a href="dashboard.php">JOBS</a>
        <a href="jobs.php">CANDIDATES APPLIED</a>
        </div>
        <div class="content">    
            
            <?php 
            if(isset($_POST['contact_us'])){
            $contact_name=$_POST['contact_name'];
            $contact_email=$_POST['contact_email'];
            $contact_phone=$_POST['contact_phone_no'];
            $contact_country=$_POST['contact_country'];
            $contact_message=$_POST['contact_message'];

            $sql = "INSERT INTO `contact`(`Name`, `Email`, `Phone`, `Country`, `Message`) VALUES ('$contact_name','$contact_email','$contact_phone','$contact_country','$contact_message')";
            if(mysqli_query($conn,$sql)){
            echo "<br><br>MESSAGE SENT SUCCESSFULLY!";
            }
            else{
            echo "ERROR: FAILED TO SEND THE MESSAGE $sql." . mysqli_error($conn);
            }
            }?>

        <div class="container-fluid my-3 details">
        </div>
        <div class="container">
        <br>
        <form method="POST" style="background-color: #fff;margin-top: 3em;margin-left: 28em;padding: 20px;border-radius: 12px;" >
        <div class="details mb-3">   
        <h2 style="font-weight: bold;font-family: Georgia, 'Times New Roman', Times, serif; padding-left:220px;font-size:50px;">CONTACT US</h2><br>
        <div class="mb-2">
        <label for="exampleInput" class="form-label">Full Name</label>
        <input type="text" class="form-control" id="name" aria-describedby="emailHelp" name="contact_name" required>
        </div>
        <div class="mb-3">
        <label for="exampleInput" class="form-label">Email Address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="contact_email" required>
        </div>
        <div class="mb-3">
        <label for="exampleInput" class="form-label">Phone Number</label>
        <input type="phone" class="form-control" id="phone" aria-describedby="Help" name="contact_phone_no" required>
        </div>
        <div class="mb-3">         
            <select id="Country" name="country">
            <option>Select your Country</option>
            <option value="Australia">Australia</option>
            <option value="America">America</option> 
            <option value="China">China</option>
            <option value="India">India</option>
            <option value="Japan">Japan</option>
            <option value="Other">Other Country</option>    
            </select><br><br>
            </div>
        <div class="mb-3">
        <label for="exampleInput" class="form-label">Message</label>
        <textarea id="message" class="form-control" aria-describedby="messageHelp" name="contact_message" required>
        </textarea>
        </div>
        <button type="submit" class="btn btn-primary" name="contact_us">Contact us</button>
        </form>
        
      </div>
      </div>
</body>

</html>

