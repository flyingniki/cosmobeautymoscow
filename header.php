<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $description?>">
    <meta name="keywords" content="<?php echo $keywords?>">
    <meta name="yandex-verification" content="e542877134ddba95">
    <meta name="google-site-verification" content="XTEITQiJ-HPaTbMPzirETCp-iahQktdxY5tyIqpEdTk">
    <link rel="stylesheet" href="<? $_SERVER['DOCUMENT_ROOT']?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<? $_SERVER['DOCUMENT_ROOT']?>/css/style.css">
    <link rel="stylesheet" href="<? $_SERVER['DOCUMENT_ROOT']?>/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="icon" href="<? $_SERVER['DOCUMENT_ROOT']?>/favicon.ico" type="image/x-icon">
    <title><?php echo $title?></title>
</head>

<body>
    <header class="container-fluid mt-2 mb-5">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="<? $_SERVER['DOCUMENT_ROOT']?>/index.php">
                    <img src="<? $_SERVER['DOCUMENT_ROOT']?>/images/main/nav_photo.jpg" alt="nav_photo" width="100px"
                        class="rounded-circle">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="<? $_SERVER['DOCUMENT_ROOT']?>/index.php">На
                                главную</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                Процедуры
                            </a>
                            <ul class="dropdown-menu bg-light bg-opacity-75" aria-labelledby="navbarDropdownMenuLink">
                                <li><a class="dropdown-item"
                                        href="<? $_SERVER['DOCUMENT_ROOT']?>/procedures/electro.php">Электроэпиляция</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="<? $_SERVER['DOCUMENT_ROOT']?>/procedures/mesohead.php">Мезо кожи
                                        головы</a></li>
                                <li><a class="dropdown-item"
                                        href="<? $_SERVER['DOCUMENT_ROOT']?>/procedures/mesobody.php">Мезо по телу</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="<? $_SERVER['DOCUMENT_ROOT']?>/procedures/biorev.php">Биоревитализация</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="<? $_SERVER['DOCUMENT_ROOT']?>/procedures/lpg.php">LPG массаж тела</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="<? $_SERVER['DOCUMENT_ROOT']?>/procedures/facemassage.php">Пластический
                                        массаж лица</a></li>
                                <li><a class="dropdown-item"
                                        href="<? $_SERVER['DOCUMENT_ROOT']?>/procedures/faceclean.php">Чистка лица</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="<? $_SERVER['DOCUMENT_ROOT']?>/procedures/peeling.php">Пилинги</a></li>
                                <li><a class="dropdown-item"
                                        href="<? $_SERVER['DOCUMENT_ROOT']?>/procedures/eyebrow.php">Коррекция и
                                        окрашивание бровей</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="<? $_SERVER['DOCUMENT_ROOT']?>/procedures/laser.php">Лазерная эпиляция</a>
                                </li>
                                <li><a class="dropdown-item"
                                        href="<? $_SERVER['DOCUMENT_ROOT']?>/procedures/guinot.php">Микротоковая
                                        процедура Guinot</a></li>
                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="<? $_SERVER['DOCUMENT_ROOT']?>/price.php">Цены</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<? $_SERVER['DOCUMENT_ROOT']?>/contacts.php">Контакты</a>
                        </li>
                    </ul>
                    <div class="phone mx-2 my-3">
                        <a href="tel:+79153401720"><img src="<? $_SERVER['DOCUMENT_ROOT']?>/images/icons/phone.png"
                                alt="phone" width="35px"></a>
                    </div>
                    <div class="w__app mx-2 my-3">
                        <a href="https://wa.me/79153401720"><img
                                src="<? $_SERVER['DOCUMENT_ROOT']?>/images/icons/whatsapp_icon.png" alt="whatsapp_icon"
                                width="35px"></a>
                    </div>
                    <div class="inst mx-2 my-3">
                        <a href="https://www.instagram.com/elza.cosmetolog/"><img
                                src="<? $_SERVER['DOCUMENT_ROOT']?>/images/icons/instagram_icon.png"
                                alt="instagram_icon" width="35px"></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>