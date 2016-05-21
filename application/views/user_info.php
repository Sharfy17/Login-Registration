<?php
session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User Info</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="/assets/user_info.css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <a class="logout" href="/Users/log_out">log off</a>
      </div>
      <div class="row">
      <br><br><br><br><br>
        <p> Welcome <?= $this->session->userdata('name'); ?> </p>
        <br>
        <p> User Information </p>
        <p>Name: <?= $this->session->userdata('name'); ?> </p>
        <p>Email Address: <?= $this->session->userdata('email'); ?> </p>
      </div>
    </div>
  </body>
</html>
