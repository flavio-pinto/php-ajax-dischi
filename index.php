<!-- Include content array from main-content.php -->
<?php include_once 'partials/data/main-content.php';?>

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
    <!-- HEADER -->
    <header class="header">
        <div class="header__content">
            <img class="header__content__logo" src="dist/assets/images/spotify-logo.png" alt="">
        </div>
    </header>

    <!-- MAIN CONTENT AREA -->
    <main class="main">
        <div class="main__content">
            <?php foreach($albums as $album) { ?>
                <div class="main__content__box">
                    <div class="wrapper__img">
                        <img src="<?php echo $album['cover'] ?>" alt="">
                    </div>
                    <h3 class="main__content__box__title"><?php echo $album['title'] ?></h3>
                    <h4 class="main__content__box__artist"><?php echo $album['artist'] ?></h4>
                    <span class="main__content__box__year"><?php echo $album['year'] ?></span>
                </div>
            <?php } ?>
        </div>
    </main>
</body>
</html>