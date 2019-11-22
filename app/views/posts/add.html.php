<?php ob_start();
?>

<div class="container">
<div class="row">
  <div class="col-md-6 text-left">

    <form method="post" action="" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Title</label>
        <input name="title" type="text" class="form-control" placeholder="Enter post's title">
      </div>
      <div class="form-group">
        <label for="description">Description</label>
        <input name="description" type="text" class="form-control" placeholder="Enter the description">
      </div>
      <div class="form-group">Select file to upload:
        <input type="file" id="cover" name="cover">
      </div>
      <br>
      <button type="submit" class="book-btn">ADD</button>
    </form>

  </div>
</div>
</div>

<?php $content = ob_get_clean(); ?>
<?php include 'app/views/layout2.html.php'; ?>


</body>

</html>