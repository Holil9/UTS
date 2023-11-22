<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row d-flex align-items-center justify-content-center" style="min-height: 30vh;">
      <div class="col text-center">
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="card mx-auto mt-3" style="width: 30rem;">
        <div class="card-body">
          <h5 class="card-title text-center">register</h5>
          <form action="/registeruser" method="post">
            @csrf
          <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="text" name="name" class="form-control" id="exampleInputEmail1" 
    aria-describedby="emailHelp">
    <label for="exampleInputEmail1" class="form-label">email</label>
    <input type="text" name="email" class="form-control" id="exampleInputEmail1" 
    aria-describedby="emailHelp">
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">password</label>
    <input type="password" name="password" class="form-control" id="exampleInputEmail1" 
    aria-describedby="emailHelp">
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">ingat saya</label>
            </div>
            <a href="/login" class="btn btn-primary">Login</a>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
