<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Login Page</title>
</head>
<body>
  <div class="container">
      <div class="row" style="padding: 10% 35% 4% 35%;">
        <form action="/login" method="POST">
          @csrf
          <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" class="form-control" placeholder="Enter name">
        </div>
        <div class="form-group">
          <label for="">Email</label>
          <input type="text" name="email" class="form-control" placeholder="Enter email">
        </div>
        <div class="form-group">
          <label for="">Tel</label>
          <input type="text" name="tel" class="form-control" placeholder="Enter tel">
        </div>
        <div class="form-group">
          <label for="">address</label>
          <input type="text" name="address" class="form-control" placeholder="Enter address">
        </div>
        <div style="text-align:center;padding-top: 10px;">
          <button class="btn btn-success">Login</button>
        </div>
        </form>
      </div>
  </div>
</body>
</html>