<?php
  include_once("templates/header.php");

  if(isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach($posts as $post){
      if($post['id'] == $postId) {
        $currentPost = $post;
      }
    }
  }
?>
  <main id="post-container">
    <div class="content-container">
      <h1 id="main-title"><?=$currentPost['title'] ?></h1>
      <p id="post-description"><?=$currentPost['description'] ?></p>
      <div class="img-container">
        <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img'] ?>" alt="<?=$currentPost['title'] ?>">
      </div>
      <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores maxime ipsa commodi sint veritatis? Tempora perferendis eligendi reprehenderit nihil aut? Reprehenderit nisi repellendus, error in corrupti itaque nihil explicabo eveniet!
      Eligendi repellat repudiandae laboriosam autem aut asperiores tenetur repellendus unde facere quae beatae laborum dolor, ea odit vitae labore quisquam fuga perspiciatis cum, quidem blanditiis quos iure vel error. Dicta.
      Nulla voluptatibus aspernatur id vitae fugiat. Quo facilis in saepe a eaque, consequatur fugit cum doloribus reiciendis rerum deserunt dignissimos cumque dolorum suscipit dolor vero nesciunt, unde dolores. Nisi, quidem.
      Suscipit ipsum, quibusdam totam tempora vitae laboriosam reprehenderit maiores nobis vel dignissimos nostrum dolorem esse nihil error sapiente omnis! Rem ex eaque voluptatibus modi sequi inventore error ullam amet commodi!
      Ad, quidem, exercitationem est unde laborum laboriosam a molestias error eaque dicta porro libero rerum amet tenetur deleniti enim sit facere corrupti voluptatibus illo modi? Tenetur iusto iure dignissimos sapiente!</p>
    </div>
    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores maxime ipsa commodi sint veritatis? Tempora perferendis eligendi reprehenderit nihil aut? Reprehenderit nisi repellendus, error in corrupti itaque nihil explicabo eveniet!
      Eligendi repellat repudiandae laboriosam autem aut asperiores tenetur repellendus unde facere quae beatae laborum dolor, ea odit vitae labore quisquam fuga perspiciatis cum, quidem blanditiis quos iure vel error. Dicta.
      Nulla voluptatibus aspernatur id vitae fugiat. Quo facilis in saepe a eaque, consequatur fugit cum doloribus reiciendis rerum deserunt dignissimos cumque dolorum suscipit dolor vero nesciunt, unde dolores. Nisi, quidem.
      Suscipit ipsum, quibusdam totam tempora vitae laboriosam reprehenderit maiores nobis vel dignissimos nostrum dolorem esse nihil error sapiente omnis! Rem ex eaque voluptatibus modi sequi inventore error ullam amet commodi!
      Ad, quidem, exercitationem est unde laborum laboriosam a molestias error eaque dicta porro libero rerum amet tenetur deleniti enim sit facere corrupti voluptatibus illo modi? Tenetur iusto iure dignissimos sapiente!</p>
    </div>
  </main>
  <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul class="tags-list">
      <?php foreach($currentPost['tags'] as $tag): ?>
        <li><a href="#"><?= $tag ?></a></li>
      <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categorias</h3>
    <ul id="categories-list">
      <?php foreach($categories as $category): ?>
        <li><a href="#"><?= $category ?></a></li>
      <?php endforeach; ?>
    </ul>
  </aside>  
<?php
    include_once("templates/footer.php")
  ?>