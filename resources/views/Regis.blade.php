<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <title>Registration Form</title>
  <style>
    .card-img-lefth {
      height: 70vh;
      width: 650px;
      background: url('https://cdn.kibrispdr.org/data/995/animasi-untuk-presentasi-18.jpg'); center no-repeat / cover;
     
    }
  </style>
</head>

<body>
  <div class="container mt-5">
    <div class="row justify-content-right">
      <div class="col-lg-6">
        <div class="card shadow-lg">
          <div class="card-body p-5">
            <h2 class="card-title text-center mb-4">Registration Form</h2>
            <form action="/Registeruser" method="post">
                @csrf
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" class="form-control" id="inputName" name="name" placeholder="Enter your name">
              </div>
              <div class="form-group">
                <label for="inputEmail">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" placeholder="Enter your email">
              </div>
              <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" id="inputPassword" name="password" placeholder="Enter your password">
              </div>
              <button type="submit" class="btn btn-primary btn-block">Register</button>
            </form>
            <br>
            <a class="mt-4" href="/Login">Login</a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 d-none d-lg-block">
        <div class="card-img-lefth"></div>
      </div>
    </div>
  </div>
</body>

</html>
