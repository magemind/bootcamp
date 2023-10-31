<?php

include "../init.php";
include "elements/header.php";

?>

        <h1>Die Startseite</h1>

<?php
        $postsRepository = new App\Post\PostRepository($pdo);
        $res = $postsRepository->fetchPosts();
?>

        <ul>
          <?php foreach($res AS $row) : ?>
            <li>
              <a href="post.php?id=<?php echo $row->id; ?>">
                <?php echo $row->title; ?>
              </a>
            </li>
            <?php endforeach; ?>
        </ul>
<?php include "elements/footer.php"; ?>