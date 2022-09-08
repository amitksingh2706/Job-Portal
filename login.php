<?php include 'config.php' ?>
  <!doctype html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width" initial-scale="1.0">
      <meta name="keyword" content="job,employment">
      <meta name="description" content="In this website you can apply for the job and search for the jobs available  ">
      <title>LOGIN</title>  
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
      <link href="styles.css" rel="stylesheet">
    </head>
    <body>
    <form method="POST">
      <div class="details mb-3">   
      <h2 style="font-weight:bold;font-family: Georgia, 'Times New Roman', Times, serif; padding-left:400px;font-size:50px;">LOGIN</h2><br>
      <div class="mb-3">
      <div class="mb-3">
      <label for="exampleInput" class="form-label">Email Address</label>
      <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
      </div>
      <div class="mb-3">
      <label for="exampleInput" class="form-label">Password</label>
      <input type="password" class="form-control" id="InputPassword" name="password" required>
      </div>
      <button type="submit" name="Login" class="btn btn-primary">Submit</button><br><br>New user ?<br>Create account <a href="register.php">Sign up</a>
      </form>
      <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    </body>
  </html>