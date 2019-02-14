<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Arwana Citramulia</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
  
  <!-- <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css"> -->
  
  <link rel="stylesheet" href="assets/dist/signin.css">
  <!-- <link rel="stylesheet" href="signin.css"> -->
</head>
<body>

  <form class="form-signin" action="login-user.php" method="post" enctype="multipart/form-data">
    <center>
      <img class="mb-4" src="assets/img/logo.png" alt="" width="200px" height="100px">
      <h1 class="h3 mb-3 font-weight-normal">Please Login</h1>
    </center>
    <label for="inputEmail" class="sr-only">Email address</label>
    <input type="text" name="username" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
    <label for="inputPassword" class="sr-only">Password</label>
    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Login</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
  </form>

  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
  <script src="assets/dist/jquery-3.3.1.min.js"></script>
  
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script> -->
  <script src="assets/dist/popper.min.js"></script>

  <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script> -->
  <script src="assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

  <script src="assets/dist/jquery.bootstrap.wizard.js"></script>


</body>
</html>
