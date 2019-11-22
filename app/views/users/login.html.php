<?php ob_start(); 

 ?>


<br><br><br><br><br><br>
<div class="container">
  <div class="row">
    <div class="col-md-6 text-left">
    <form method="post" enctype="multipart/form-data">
      <div>
        <label for="email">Email</label>
        <input name="email" type="email" class="form-control" placeholder="Enter email">
        <!-- <div><input name="email" type="email" placeholder="Enter your email" value="<?php if (isset($_COOKIE["remember_email"])) {
                                                                                            echo $_COOKIE["remember_email"];
                                                                                          } ?>" class="form-control"></div> -->
      </div>
      <br>
      <div>
        <label for="password">Password</label>
        <input name="password" type="password" class="form-control" placeholder="Enter password">
      </div>
      <br>                                                                          
      <!-- <input type="checkbox" name="remember" id="remember" <?php if (isset($_COOKIE["remember_login"])) { ?> checked <?php } ?>>Remember me<br><br> -->
      <button type="submit" class="btn btn-danger">LOGIN</button>
    </form>
    </div>
  </div>
</div>
<?php $content = ob_get_clean(); ?>
<?php include 'app/views/layout2.html.php'; ?>