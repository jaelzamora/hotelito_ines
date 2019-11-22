<?php ob_start();
$postEdit = $data['post'];
?>

<div class="container">
<div class="row">
  <div class="col-md-6 text-left">

    <form method="post" action="" enctype="multipart/form-data">
      <input type="hidden" name="id" value="<?= $postEdit->id ?>">
      <div class="form-group">
        <label for="title">Title</label>
        <input name="title" type="text" class="form-control" value="<?= $postEdit->title ?>">
      </div>

      <div class="form-group">
        <label for="description">Description</label>
        <input name="description" type="text" class="form-control" value="<?= $postEdit->description ?>">
      </div>

      <div class="form-group">Select file to upload:
        <input type="file" id="cover" name="cover">
      </div>
      <button type="submit" class="book-btn">EDIT</button>

    </form>
      </div>
  </div>
</div>

<?php $content = ob_get_clean(); ?>
<?php include 'app/views/layout2.html.php'; ?>

</body>

</html>