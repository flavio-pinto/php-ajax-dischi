<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/assets/styles/styles.css">
    <title>PHP Dischi</title>
</head>
<body>
    <?php include 'partials-php/main-content.php';?>
    <header class="header">
        <div class="header__content">
            <img class="header__content__logo" src="dist/assets/images/spotify-logo.png" alt="">
        </div>
    </header>

    <main class="main">
        <div class="main__content">
            <?php foreach($albums as $album) { ?>
                <div class="main__content__box">
                    <img src="<?php echo $album['cover'] ?>" alt="">
                    <h3 class="main__content__box__title"><?php echo $album['title'] ?></h3>
                    <h4 class="main__content__box__artist"><?php echo $album['artist'] ?></h4>
                    <span class="main__content__box__year"><?php echo $album['year'] ?></span>
                </div>
            <?php } ?>
        </div>
    </main>
    <!-- JAVASCRIPT -->
    <script src="dist/assets/scripts/main.js"></script>
</body>
</html>