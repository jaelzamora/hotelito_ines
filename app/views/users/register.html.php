<?php ob_start(); ?>

<br><br><br><br><br><br>
<div class="container">
  <div class="row">
    <div class="col-md-6 text-left">
    <form method="post" action="" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Username</label>
        <input name="name" type="text" class="form-control" placeholder="Enter user's name">
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input name="email" type="email" class="form-control" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input name="password" type="password" class="form-control" placeholder="Enter password">
      </div>
      <div class="form-group">
        <label for="password2">RepeatPass</label>
        <input name="password2" type="password" class="form-control" placeholder="Enter password again">
      </div>
  <br>
      <button type="submit" class="btn btn-warning">ADD USER</button>
    </form>
    </div>
  </div>
</div>
</div>

<?php $content = ob_get_clean(); ?>
<?php include 'app/views/layout2.html.php'; ?>

</body>

</html>