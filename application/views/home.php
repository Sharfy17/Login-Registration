<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="/assets/home.css">

  </head>
  <body>
    <div class="container">
      <div class="row">
        <?php if ($this->session->flashdata('log_errors')) {
            echo $this->session->flashdata('log_errors');
        } ?>

        <h1> Login </h1>
        <form action="/Users/login" method="post" class="form-horizontal col-md-10" role="form">
          <div class="form-group">
            <label class="control-label col-sm-2" for="email">Email:</label>
            <div class="col-md-6">
              <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-md-6">
              <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-6 col-sm-10">
              <button type="submit" class="btn btn-default">Login</button>
            </div>
          </div>
        </form>
      </div>
      <div class="row">
        <h1> Register </h1>

        <form action="/Users/register" method="post" class="form-horizontal col-md-10" role="form">
          <div class="form-group">

            <label class="control-label col-sm-2" for="name">Name:</label>

            <div class="col-md-6">
              <input type="text" name="name" class="form-control" id="name" placeholder="Enter name">
            </div>
            <?= form_error('name'); ?>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="name">Alias:</label>
            <div class="col-md-6">
              <input type="text" name="alias" class="form-control" id="alias" placeholder="Enter alias">
            </div>
            <?= form_error('alias'); ?>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="name">Email:</label>
            <div class="col-md-6">
              <input type="email" name="email" class="form-control" id="email" placeholder="Enter email">
            </div>
            <?= form_error('email'); ?>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Password:</label>
            <div class="col-md-6">
              <input type="password" name="password" class="form-control" id="confirm_pwd" placeholder="Enter password">
            </div>
            <?= form_error('password'); ?>
          </div>
          <p>*Password should be at least 8 characters </p>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Confirm PW:</label>
            <div class="col-md-6">
              <input type="password" name="confirmpassword" class="form-control" id="pwd" placeholder="Re-enter password">
            </div>
              <?= form_error('confirmpassword'); ?>
          </div>
          <div class="form-group">
            <label class="control-label col-sm-2" for="pwd">Date of Birth:</label>
            <div class="col-md-4">
              <input type="date" name="dob" class="form-control" id="pwd" placeholder="">
            </div>
            <i class="fa fa-calendar" aria-hidden="true"></i>
              <?= form_error('dob'); ?>

          </div>

          <div class="form-group">
            <div class="col-sm-offset-6 col-sm-10">
              <button type="submit" class="btn btn-default">Register</button>
            </div>
          </div>
        </form>







      </div>
    </div>
  </body>
</html>
