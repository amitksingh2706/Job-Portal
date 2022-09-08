  <?php include 'config.php' ?>
  <!doctype html>
  <html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="dashboard.css" rel="stylesheet">
    <title>DASHBOARD</title>

    </head>

    <body>
        <div>  
          <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
            <a class="navbar-brand"  href="dashboard.php">DASHBOARD</a>
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
        <a class="active" href="dashboard.php">JOBS</a>
        <a href="jobs.php">CANDIDATES APPLIED</a>
        </div>

        <!-- Page content -->
        <div class="content">
        <!-- USING "COLLAPSE" COMPONENT FROM BOOTSTRAP FOR THE BUTTON SHOWING THE FORM -->
        <p>
  
            <?php
            if(isset($_POST['job_submit'])){
            $cname=$_POST['cname'];
            $position=$_POST['position'];
            $description=$_POST['description'];
            $skills=$_POST['skills'];
            $CTC=$_POST['CTC'];
            $sql = "INSERT INTO `dashboard`(`Company_Name`,`Position`,`Job_Description`,`Skills`,`CTC`) VALUES('$cname','$position','$description','$skills','$CTC')" ;
            if(mysqli_query($conn,$sql)){
            echo "<br><br><br>New Job Posted !";
            }
            else{
            echo "ERROR: Failed to post the job $sql." . mysqli_error($conn);
            }
            }
            ?>  
        <br><br><br>
        <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">Post Job</button>
      </p>
      <div class="collapse" id="collapseExample">
      <div class="card card-body">  
        <form method="POST">
            <div class="mb-3"">
            <label for="companyName" class="Company-Name">Company Name</label>
            <input type="text" class="form-control" id="name" aria-describedby="Help" name="cname" required>
            </div>
            <div class="mb-3">
            <label for="Position" class="position">Position</label>
            <input type="text" class="form-control" id="position" aria-describedby="Help" name="position" required>
            </div>
            <div class="mb-3">
            <label for="jobDescription" class="job-Description">Job Description</label>
            <input type="text" class="form-control" id="description" aria-describedby="Help" name="description" required>
            </div>
            <div class="mb-3">
            <label for="jobDescription" class="job-Description">Skills</label>
            <input type="text" class="form-control" id="description" aria-describedby="Help" name="skills" required>
            </div>
            <div class="mb-3">
            <label for="CTC" class="CTC">CTC</label>
            <input type="text" class="form-control" id="CTC" aria-describedby="Help" name="CTC" required>
            </div>
            <button type="submit" class="btn btn-primary" name="job_submit">Submit</button>
        </form>
      </div>
      </div>


      <table class="table">
      <thead>
        <tr>
        <th scope="col">Sr.No</th>
        <th scope="col">Company Name</th>
        <th scope="col">Position</th>
        <th scope="col">CTC</th>
        </tr>
      </thead>

        <tbody>
    
        <?php 
          $sql="SELECT `Company_Name`, `Position`, `CTC` FROM `dashboard`;";
          $result= mysqli_query($conn,$sql);
          $i=0;
          if($result->num_rows>0){
          while($row = mysqli_fetch_assoc($result)) { 
        ?>

        <tr>
        <td><?php echo ++$i ?></td>
        <td><?php echo $row['Company_Name'] ?></td>
        <td><?php echo $row['Position'] ?></td>
        <td><?php echo $row['CTC'] ?></td>
        </tr>

      
        <?php }
        }
        ?>   
      
        </tbody>
        </table>
        </div>  
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
    </html>