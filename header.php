<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php wp_head() ?>
</head>

<body>
    <div class="wrapper">
        <header class="header">
            <div class="container header_container">
                <div class="logo">
                    <a href="/" class="logo__link">Kg-News </a>
                </div>

                <div class="logo__icons">
                    <a href="tel:+996502067646" class="color_link">
                        <div class=" material-icons" style="font-size: 35px; margin-right: 2rem; color:#192a56 ;">
                            phone
                        </div>
                    </a>
                    <a href="mailto:adilettulebaev@gmail.com" class="color_link">
                        <div class="material-icons" style="font-size: 35px; color:#192a56 ;">
                            mail
                        </div>
                    </a>

                </div>
            </div>
        </header>
        <nav class="conteiner
      top__nav nav__container">
            <form style="margin: 0;">
                <input type="search" placeholder="Искать здесь..." />
                <button type="submit" class="submit">
                    <i class="ico material-icons">
                        <!-- search -->
                    </i>
                </button>
            </form>
            <!-- <ul class="top__nav__list">
                <li class="top__nav__item">
                    <a href="" class="top__nav__link">Главная</a>
                </li>
                <li class="top__nav__item">
                    <a href="" class="top__nav__link">Интересные</a>
                </li>
                <li class="top__nav__item">
                    <a href="" class="top__nav__link">Обшество</a>
                </li>
                <li class="top__nav__item">
                    <a href="" class="top__nav__link">Политика</a>
                </li>
                <li class="top__nav__item">
                    <a href="" class="top__nav__link">Спорт</a>
                </li>
                <li class="top__nav__item">
                    <a href="" class="top__nav__link">Техналогии</a>
                </li>
                <li class="top__nav__item">
                    <a href="" class="top__nav__link">Наука</a>
                </li>
                <li class="top__nav__item">
                    <a href="" class="top__nav__link">Культура</a>
                </li>
                <li class="top__nav__item">
                    <a href="" class="top__nav__link">В мире</a>
                </li>
                <li class="top__nav__item">
                    <a href="" class="top__nav__link">Туризм</a>
                </li>
            </ul> -->
            <?php
            wp_nav_menu([
              "theme_location" => "top-nav",
              "menu_class" => "top__nav__list",
              
            ]);
          ?>
            <button class="hamburger hamburger--collapse" type="button">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </nav>