<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>КиноБаза bootstrap</title>
    <link rel="stylesheet" href="/kinobaza-on-php/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/kinobaza-on-php/assets/css/style.css">
    <link rel="icon" type="logo_img" href="/Img_logo/Логотип_общий.png">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <nav role="navigation" class="navbar navbar-inverse">
            <div class="container">
                <div class="navbar-header header">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">

                                <h1><a href="/kinobaza-on-php/index.php">КиноБаза</a></h1>
                                <p>Кино - наша страсть!</p>
                            </div>
                        </div>
                    </div>

                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-right" id="navbarCollapse">
                    <ul class="nav nav-pills">
                        <li class="active"> <a href="/kinobaza-on-php/index.php">главная</a></li>
                        <li> <a href="/kinobaza-on-php/views/films.php">фильмы</a> </li>
                        <li> <a href="/kinobaza-on-php/views/serials.php">сериалы</a> </li>
                        <li> <a href="/kinobaza-on-php/views/rating.php">рейтинг фильмов</a> </li>
                        <li><a href="/kinobaza-on-php/views/rating_s.php">рейтинг сериалов</a></li>
                        <li> <a href="/kinobaza-on-php/views/contact.php">контакты</a> </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</div>