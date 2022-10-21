<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RareCars</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header>
        <div class="header">
            <div class="logo">
                <a href="index.html"><img src="img/logo.jpg" alt="logo"></a>
                <div class="logo_text">
                    <h1><a href="index.html">RareCars</a></h1>
                    <h2>Машины - наша страсть!</h2>
                </div>
            </div>
            <div class="nav">
                <ul class="menu">
                    <li><a href="index.html">Главная</a></li>
                    <li><a href="rarerating.html">Топ самых редких</a></li>
                    <li><a href="costrating.html">Топ самых дорогих</a></li>
                    <li><a href="contact.html">Контакты</a></li>
                </ul>
            </div>
        </div>
    </header>
    <section>
        <div class="send">
            <h2>Спасибо <?php echo $_GET['yourName'];?>, с вами в скорости свяжется администрация!<br> А пока-что рекомендуем посмотреть обзор на 2021 Tesla Model S</h2>
            <iframe width="800" height="450" src="https://www.youtube.com/embed/B3DTQT0i754" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </section>
    <script src="js/main.js"></script>
</body>
</html>