<?php
foreach ($data['posts'] as $post) : ?>

  <div class="col-sm-4 col-md-4">
    <div class="thumbnail">
      <h2><?= $post['title'] ?><span><?= $post['created_at'] ?></span></h2>
      <div class="thumbnail-img">
        <?php echo '<img src="data:image/jpeg;base64,' . base64_encode($post['filedata']) . '"/>'; ?>
        <div class="thumbnail-img-overlay"></div>
      </div>

      <div class="caption">
        <div class="blog-txt">
          <h3>
            <a href="#">
              <?= $post['title'] ?>
            </a>
          </h3>
          <p>
            <!-- Cortar texto si pasa de 144 -->
            <?php if (strlen($post['description']) > 144) {
                echo substr($post['description'], 0, 144) . '...';
              } else { ?>
              <?= $post['description'] ?>
            <?php } ?>
          </p>
          <a href="#">Leer Más</a>
          <?php if (isset($_SESSION['is_logged_in']) && $_SESSION['user_data']['role']=='admin') { ?>
            <a href="<?= ROOT_PATH ?>posts/edit/<?= $post->id ?>"><i style="color:grey" class="ml-4 fa fa-pen"></i></a>
            <a href="<?= ROOT_PATH ?>posts/delete/<?= $post->id ?>"><i style="color:#e3665d;" class="ml-4 fa fa-trash danger"></i></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>


<?php endforeach; ?>