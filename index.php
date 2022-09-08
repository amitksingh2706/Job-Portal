  <?php include 'config.php' ?>
  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link href="career.css" rel="stylesheet">
      <title>JOB PORTAL</title>
    </head>
  <body>
    <div class="jobs" style="background-image: url(career.png);background-size: cover;">
    <h1>JOB PORTAL</h1>
    <h4>BEST JOBS AVAILABLE MATCHING YOUR SKILLS !</h4>
    </div>

    <div class="row"> 
      
      <?php 
        $sql="SELECT `ID`, `Company_Name`, `Position`, `Job_Description`, `Skills`, `CTC` FROM `dashboard`; ";
        $result=mysqli_query($conn,$sql);
        $x = mysqli_num_rows($result);
        if ($x > 0) {
        while($row = mysqli_fetch_assoc($result)) { 
        echo '<div class="col-md-4 my-3" style="overflow:hidden;">
              <div class="company h-100 p-5 text-white bg-dark rounded-3 my-5 mx-3">
              <h3>'.$row['Position'].'</h3>
              <h4>'.$row['Company_Name'].'</h4>
              <p>'.$row['Job_Description'].'</p>
              <p>'.$row['Skills'].'</p>
              <p>'.$row['CTC'].'</p>
              <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#ApplyModal" aria-expanded="false" aria-controls="modalExample">
              Apply For Job
              </button>
              </div>
       
              </div>
              ';
          }  
          }
      ?>  
 
    <div class="modal fade" id="ApplyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" ">
    <div class="modal-dialog">
    <div class="modal-content">
    <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Apply For The Company</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
      <div class="modal-body">
      <form method="POST">
          <div class="mb-3">
          <label for="recipient-name" class="col-form-label">Name</label>
          <input type="text" class="form-control" name="name" required>
          </div>
          <div class="mb-3">
          <label for="recipient-applying" class="col-form-label">Applying For</label>
          <input type="text" class="form-control" name="applying_For" required>
          </div>
          <div class="mb-3">
          <label for="recipient-qualification" class="col-form-label">Qualification</label>
          <input type="text" class="form-control" name="qualification" required>
          </div>
          <div class="mb-3">
          <label for="recipient-year" class="col-form-label">Passed Out Year</label>
          <input type="text" class="form-control" name="passing_year" required>
          </div>
          </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary" name="apply">Apply</button>
      </form>
     
      </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
  </html>
