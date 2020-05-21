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
            <div class="header__content__input">
                <input type="text" class="header__content__input__search">
            </div>
        </div>
    </header>

    <!-- MAIN CONTENT AREA -->
    <main class="main">
        <div class="main__content">
            
        </div>
    </main>
    
    <!-- TEMPLATE HANDLEBARS -->
    <script id="album-template" type="text/x-handlebars-template">
        <div class="main__content__box">
            <div class="wrapper__img">
                <img src="{{cover}}" alt="{{title}}">
            </div>
            <h3 class="main__content__box__title">{{title}}</h3>
            <h4 class="main__content__box__artist">{{artist}}</h4>
            <span class="main__content__box__year">{{year}}</span>
        </div>
    </script>
    <!-- JAVASCRIPT -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.6/handlebars.min.js'></script>
    <script src="dist/assets/scripts/main.js"></script>
</body>
</html>