<!-- <?php
include 'db.php'
?> -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="dist/app.css">
  <title>Dischi</title>
</head>
<body>

  <!-- HEADER -->
  <header></header>

  <!-- MAIN -->
  <main>
    <div class="container">
      <div class="all-cd">
        <?php foreach ($discs as $obj) { ?>
        <div class="cd">
            <div class="cover">
              <img src="<?php echo $obj['poster']?>" alt="<?php echo $obj['title']?>">
            </div>
            <h3><?php echo $obj['title']?></h3>
            <span><?php echo $obj['author']?></span>
            <span><?php echo $obj['genre']?></span>
            <span><?php echo $obj['year']?></span>

        </div>
      <?php }?>
      </div>

    </div>

  </main>

  <script src="dist/app.js" charset="utf-8"></script>
</body>
</html>
