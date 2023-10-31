<?php

include "../database.php";
include "elements/header.php";

?>


    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="start.php">Project name</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="sitemap.php">About</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <br />
    <br />
    <br />

    <div class="container">
      <div class="starter-template">
        <h1>Die ABOUT</h1>

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