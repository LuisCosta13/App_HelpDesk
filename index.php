

<html>
  <head>
    <meta charset="utf-8" />
    <title>App Help Desk</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
      .card-login {
        padding: 30px 0 0 0;
        width: 350px;
        margin: 0 auto;
      }
    </style>
  </head>

  <body>

    <nav class="navbar navbar-dark bg-dark">
      <a class="navbar-brand" href="#">
        <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
        App Help Desk
      </a>
    </nav>

    <div class="container">    
      <div class="row">

        <div class="card-login">
          <div class="card">
            <div class="card-header">
              Login
            </div>
            <div class="card-body">
              <form action="validate_login.php" method="POST">
                <div class="form-group">
                  <input name="email" type="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                  <input name="password" type="password" class="form-control" placeholder="Password">
                </div>
                <button class="btn btn-lg btn-info btn-block" type="submit">Login</button>
              </form>
            </div>
          </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  </body>
</html>

<?php 

  if(isset($_GET['login'])){
    ?>
    <script>
    Swal.fire({
      icon: 'error',
      title: 'Email or Password Incorrect',
      text: 'Please insert a valid user account',
    });
    </script>
  <?php } ?>