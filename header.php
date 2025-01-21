<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,500,0,0&icon_names=search" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,300,0,0&icon_names=add" />
    <link rel="stylesheet" href="../main.css">
</head>

<body id="dark-mode">
    <header>
        <div class="row black" id="black">
            <div class="col">
                <div id="input">
                    <input type="text" class="inp" id="inp" placeholder="Փնտրել">
                    <div class="srch"><span class="material-symbols-outlined" id="search-ch">search</span></div>
                    <h1 id="x">
                        <div id="top-liner"></div>
                        <div id="middle-liner"></div>
                    </h1>
                </div>
            </div>
            <div class="col">
                <div id="site-mode">
                    <div id="light"></div>
                </div>
            </div>
        </div>
        <div class="border-none" id="bord">
            <div class="bord-lord" id="bbp">
                <div class="col" id="menu-show">
                    <div id="top-line"></div>
                    <div id="middle-line"></div>
                </div>
            </div>
            <div class="menu" id="show">
                <div class="col" id="showw">
                    <div class="wrapper" id="buttons">
                        <a href="home" id="a-color">Մոլորակներ</a>
                    </div>
                    <div class="wrapper" id="buttons">
                        <a href="register" id="a-color">Արեգակի մասին</a>
                    </div>
                    <? if (empty($_SESSION['user_id'])) { ?>
                        <div class="wrapper" id="buttons">
                            <a href="subs" id="a-color">Տիեզերքի մասին</a>
                        </div>
                    <? } else { ?>
                        <div class="wrapper" id="buttons">
                            <a href="subs" id="a-color">Заработок</a>
                        </div>
                        <div class="wrapper" id="buttons">
                            <a href="settings" id="a-color">Настройки</a>
                        </div>
                        <div class="wrapper" id="buttons">
                            <a href="account" id="a-color">Аккаунт</a>
                        </div>
                    <? } ?>
                </div>
                <div class="col mrg-lft-5">
                    <div id="lang">
                        <div id="rus">Հայ</div>
                    </div>
                    <div id="diff">
                        <div id="eng">Ռուս</div>
                        <div id="arm">Անգ</div>
                    </div>
                </div>
            </div>
        </div>
    </header>
</body>
