<?php
  include_once("templates/header.php")
?>
  <main>
    <div id="title-container">
      <h1>Blog Codar</h1>
      <p>O seu blog de programação</p>
    </div>
    <div id="posts-container">
        <?php foreach($posts as $posts): ?>
          <div class="post=box">
            <img src="<?= $BASE_URL ?>/img/<?= $post['img'] ?>" alt="">
          </div>
          <?php endforeach; ?>
    </div>
  </main>
  <?php
    include_once("templates/footer.php")
  ?>