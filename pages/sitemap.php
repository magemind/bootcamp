<?php

include "../database.php";
include "elements/header.php";

?>

        <h1>Die Sitemap</h1>

<?php
        $res = fetch_posts();
?>

        <ul>
          <?php foreach($res AS $row) : ?>
            <li>
              <?php echo $row['title']; ?>
            </li>
            <?php endforeach; ?>
        </ul>
<?php include "elements/footer.php"; ?>