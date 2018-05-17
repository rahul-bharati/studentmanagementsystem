<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie-edge" />
    <title>Student Management System</title>
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <div class="container pl-4 pb-5">
      <div class="row">
        <div class="col">
          <h3 class="text-center mb-5">Login <i class="fa fa-sign-in"></i></h3>
          <div class="user-div">
            <form>
              <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" placeholder="User Name" id="username" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" placeholder="Password" id="password" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="type">User Type</label>
                <select id="type" class="form-control">
                  <option>--Select--</option>
                  <option value="admin">Admin</option>
                  <option value="staff">Staff</option>
                </select>
              </div>
              <div class="form-row button-holder mt-3">
                <input type="submit" value="Login" class="btn btn-outline-light ml-5">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
