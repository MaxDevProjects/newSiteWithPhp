<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maxime Martin Développeur web Front end Nantes maxcoder MaxIndieDev</title>
    <link rel="ico" href="favicon.png">
    <link rel="canonical" href="https://maximemartin.pro"/>
    <meta title="developpeur web, web concepteur, Webdesigner, maxime martin, nantes">
    <meta name="author" content="Maxime Martin">
    <meta name="description" content="Maxime Martin développeur web front-end bootstrap, Bulma et javascript en région Nantaise.  Concepteur web, développeur web,  web designer, maxcoder, @maxIndieDev">
    <!-- <meta name="keywords" content="maxime martin, freelance, developpeur web, webdesign,HTML, CSS, JavaScript, bootstrap, bulma, nantes"> -->
    <!-- <meta http-equiv="refresh" content="5; URL=https://www.maximemartin.pro"> -->
    <!-- <meta http-equiv="default-style" content="URL=https://www.maximemartin.pro"> -->

    <link rel="stylesheet" href="./node_modules/bulma/css/bulma.css">
    <script src="jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="style/style.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.1.0/js/all.js"></script>
    <!-- google font -->
    <link href="https://fonts.googleapis.com/css?family=Unica+One|Vollkorn" rel="stylesheet">

    <link rel="stylesheet" href="./aos/aos.css">
    <script src="./aos/aos.js"></script>

    <?php
    // on inclu le common.php qui s'occupe de gérer le chargement de nos langues
    include_once 'common.php';
    // include_once 'handler.php';
    include_once 'send.php';
    ?>
    
</head>
<body>
    <div id="home" class="content menu">
        <nav class="navbar is-dark is-fixed-top" role="navigation" aria-label="main navigation">
            <div class="navbar-brand ">
                <!-- navbar items, navbar burger... -->
                <a href="#home" class="js-scrollTo"><img class="image is-96x96" src="./img/logo.svg" alt="LOGO" title="home"></a>
                    <!-- <div class="container">
                        <h1 class="title is-size-2-desktop is-size-4-tablet is-size-6-mobile has-text-light">Maxime MARTIN</h1>
                    </div> -->
                    <a role="button" class="navbar-burger has-text-grey-light" data-target="navMenu" aria-label="menu" aria-expanded="false" style="border-radius: 50%; border: 1px solid white; margin-top: auto; margin-bottom: auto; margin-right: 10px;">
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                        <span aria-hidden="true"></span>
                    </a>
                </div>
                <div class="navbar-menu" id="navMenu">
                    <div class="navbar-end has-text-centered ">
                        <a href="#about" class="navbar-item has-text-grey-light js-scrollTo">
                            <?php echo $lang['MENU_ABOUT']; ?>
                        </a>
                        <a href="#technos" class="navbar-item has-text-grey-light js-scrollTo">
                            <?php echo $lang['MENU_PORTEFOLIO']; ?>
                        </a>
                        <!-- <a href="#folio" class="navbar-item has-text-grey-light js-scrollTo">
                            PORTE-FOLIO
                        </a> -->
                        <a href="#contact" class="navbar-item has-text-grey-light js-scrollTo">
                            <?php echo $lang['MENU_CONTACT']; ?>
                        </a>
                        <div id='lang'>
                            <li><a  href="index.php?lang=<?php echo $lang['OTHER_LANGUE'];?>"><?php echo $lang['OTHER_LANGUE'];?></a></li>
                        </div>
                    </div>
                </div>               
            </nav>
        </div>

        <div class="header" alt="Negatve space photo" src="www.negativespace.co">
            <div class="container is-fluid ">
                <h1 id="name" class="title has-text-light">Maxime</h1>
                <h1 id="nickname" class="title has-text-light">MARTIN</h1>
                <h2 id="activity" class="subtitle is-4"><?php echo $lang['HEAD_ACTIVITY']; ?> <br> Front-end</h2>
                <div class="circle">
                    <div >
                        <a id="arrow" class="js-scrollTo" href="#about"><i  class="fas fa-angle-double-down fa-5x"></i></a>
                    </div>
                </div>
            </div>
        </div>


        <div id="about" class="content section">
            <div class="container">
                <h3  class="subtitle is-2"><?php echo $lang['MENU_ABOUT']; ?></h3>
                <p><?php echo $lang['ABOUT_P']; ?> <br> <?php echo $lang['ABOUT_P_BIS']; ?></p>
            </div>
        </div>

        <div id="technos" class="content section"> 
            <div class="container">
                <h3 class="subtitle is-2"><?php echo $lang['MENU_PORTEFOLIO']; ?></h3>
                <!-- <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore iusto ducimus dolor optio at aliquid nihil laudantium quae neque possimus dignissimos sequi illum rerum quis aut commodi eaque veritatis eum necessitatibus similique culpa, maxime sunt, amet veniam! Illum deleniti ullam reprehenderit id vitae inventore officiis quod pariatur molestias aspernatur recusandae, error consequatur earum voluptatum eos blanditiis quia, magni, totam nesciunt ut quos. Quasi eligendi enim eveniet repudiandae rem magnam maiores officia, reiciendis mollitia aliquam nobis laboriosam! Nesciunt, atque consequatur non nihil explicabo harum doloribus, mollitia enim ut similique necessitatibus quasi est facere? Veniam, vitae ipsa id sunt nisi, pariatur iure soluta laborum, excepturi odit ut ratione fugit dolores a! Eveniet quidem reiciendis fugiat beatae minima dolorem earum quam soluta tempora iste tenetur, quia, tempore provident obcaecati veniam, velit aspernatur a! Tempore enim placeat, quibusdam et quas porro corporis ab, tempora perspiciatis ipsa blanditiis officia iure. Assumenda eligendi necessitatibus molestiae beatae? Dolore quis architecto tempora hic placeat impedit commodi totam id nam soluta assumenda dignissimos alias cumque sed, tempore consequuntur quam quia, perspiciatis explicabo sit natus. Facilis repellendus quas reprehenderit amet fuga, numquam dolor asperiores totam debitis quidem consequuntur. Odio vel tempora deserunt ipsum quae sit, necessitatibus sed earum ipsa minus.</p> -->
                <!-- <div data-aos="zoom-in"> -->
                <div  class="columns ">
                    <div id="hc" class="column has-text-centered tech" data-aos="zoom-in" data-aos-easing="ease-in-out" >
                        <!-- <i class="fab fa-html5 fa-9x " ></i> -->
                        <img src="img/html5-css3.svg" title="HTML5/CSS3" alt="html5/css3">
                        <!-- <i class="fab fa-css3-alt fa-9x"  title="CSS3"></i> -->
                        <!-- <img src="img/css3.svg" title="css3"> -->
                        
                    </div>
                    <div class="column has-text-centered tech" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-delay="0" >
                        <a href="https://virtualcard-maxime-martin.netlify.com" target="_blank" class="js-scrollTo" onclick="myFunctionVue()">
                            <img id="bootstrap" src="img/bootstrap.svg" title="Bootstrap" alt="bootstrap"></a>
                    </div>
                    <div class="column has-text-centered tech" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-delay="50">
                        <a  href="#home" target="_blank" class="js-scrollTo" onclick="myFunctionVue()"><img id="bulma" src="img/bulma.svg" title="Bulma" alt="bulma">
                    </div>
                </div>
                <div class="columns" >
                    <div class="column has-text-centered tech" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-delay="100">
                        <!-- <i class="fab fa-js-square fa-9x"  ></i> -->
                        <a  href="https://eat-it.netlify.com" target="_blank" class="js-scrollTo" onclick="myFunctionVue()"><img id="js" src="img/js.svg" title="JAVASCRIPT" alt="javascript"></a>
                    </div>
                    <div class="column has-text-centered tech" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <!-- <i class="fab fa-vuejs fa-9x"  ></i> -->
                        <a  href="https://lm-texteditor.netlify.com" target="_blank" class="js-scrollTo" onclick="myFunctionVue()"><img id="vue" src="img/vuejs.svg" title="VUEJS" alt="vuejs"></a>
                    </div>
                    <div class="column has-text-centered tech" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-delay="200">
                        <a  href="#pixels" class="js-scrollTo" onclick="myFunctionPixel()"><img id="photoshop" src="img/photoshop.svg" title="photoshop - pixelArt" alt="realisation de pixel art"></a>
                    </div>
                    <div class="column has-text-centered tech"  data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-delay="250">
                        <a  href="#games" class="js-scrollTo" onclick="myFunction()"><img id="gamepad" src="img/gamepad-solid.svg" title="GameDev" alt="developpement de jeux video"></a>
                    </div>
                </div>
            </div>
        </div>


        <!-- ########################################################-->
        <!-- ########################################################-->
        <!-- #####################pixel art##########################-->
        <!-- ########################################################-->
        <div id="pixels">
            <h3 class="subtitle is-2 has-text-centered">Pixel Art</h3>
            <div class="columns ">
                <div class='column'>
                    <figure class="image"><img  width="390"src="https://drive.google.com/uc?id=1VczZD65k7tjOclYkfvJsdBTkh6UVVkiE" alt="candle" title="light" data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0"></figure>
                </div>
                <div class='column'>
                    <figure class="image"><img  width="390" src="https://drive.google.com/uc?id=17UaKqD4Fnw8fzGfWOG1T2bDAFGeasYgK" alt="BBB" title="Buy By Blood"
                    data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0"></figure>
                </div>
                <div class='column'>
                    <figure class="image"><img width="390" src="https://drive.google.com/uc?id=1VBM527R1oV28qEk6VYd70B_jVJA1Uvy6" alt="steampunkGun" title='steampunkGun'
                    data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0"></figure>
                </div>
                <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://drive.google.com/uc?id=1vZNWVQSpXGNFj31dCYlzsyOx4OXi28Iz" alt="final fantasy character" title="Moogle"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div>
            </div>
            <div class="columns">
                <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://drive.google.com/uc?id=1OE3dGFjSfgv-6Ce558xhVE0_lsFTGvlh" alt="chickenWings" title="chickenWings"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div>
                <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://drive.google.com/uc?id=1CmO11mFIcxpYcIE2nceS3nIG5lggMER9" alt="nessy" title="Nessy"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div>
                <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://drive.google.com/uc?id=1X-soRDGBjx2BpjS3i3I57LxIzlgqqf7-" alt="Apple" title="Apple"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div> 
                <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://drive.google.com/uc?id=1sjjAhlibsb4Z_lmM9CkhM29bL1PMpUaM" alt="MonstreDeFranckeinstein" title="Monstre de Franckeinstein"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div>
            </div>
<!-- https://drive.google.com/uc?id=1jRRed9AE-s1O70Ya3aXFzgRohKgXrymz -->
            <div class="columns">
                <div class='column'>
                    <figure class="image">
                        <img width="390" src="https://drive.google.com/uc?id=1RHbjqZxkNxGpEVl8-rDwRqvHJZdIGeKq" alt="wand" title="magic"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div>
                <div class='column'>
                    <figure class="image">
                        <img 
                        width="390"src="https://drive.google.com/uc?id=1QKCLcdJoAVuWyvFp43xltQjP2QfstLVD" alt="3d iso" title="3d iso"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div> 
                 <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://drive.google.com/uc?id=1D5KbDpa7uSbxuFagcXoyBiea_5YcJkwK" alt="Xmas" title="Happy Xmas"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div> 
                <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://drive.google.com/uc?id=1vUeOkeCl-MV7eYDBgDYOG1-ZtgY1MuXM" alt="Link" title="Mon hero de jeu vidéo préféré"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div> 
            </div>
            
            <div class="columns">
                <div class='column'>
                    <figure class="image">
                        <img width="390" src="https://drive.google.com/uc?id=1jsytT0517ljFhqU2pxeaACzxM7fdsebB" alt="randoneur" title="le randoneur"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div>
                <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://drive.google.com/uc?id=16nUNK9PxqMHZeUHj27AyBggxDZCAcCqk" alt="mrjack" title="Mr Jack"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div> 
                 <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://drive.google.com/uc?id=1uXkJntyBBkL85HXeKe70wK7OAkkQhPxg" alt="palmier" title="île déserte"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div> 
                <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://drive.google.com/uc?id=1cdvhi5OyKx5eAaxLe8LDDoyiG8dEmQ8r" alt="fléau d'arme" title="fléau d'arme"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div> 
            </div>

            <div class="columns">
                <div class='column'>
                    <figure class="image">
                        <img width="390" src="https://drive.google.com/uc?id=1wGD6bTqiZVkYyx7JaxHRgoOVhmmeyoWl" alt="materiaux" title="materiaux"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div>
                <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://drive.google.com/uc?id=166TsVdDB8YUnQbMbhjCZ5zbPf9Rds77e" alt="Lonely" title="Seul au monde"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div> 

                 <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://drive.google.com/uc?id=1wPDw91q95L2HA_LXG7vuivsR0PSimAjN" alt="tilesheet" title="tilesheet du jeu Sokoban"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div> 
                <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://drive.google.com/uc?id=1oSn-5HbNxTqBpYbPZT0gjkW54nGsEfdW" alt="couronne" title="couronne"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div> 
            </div>
            
            <div class="columns">

                <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://drive.google.com/uc?id=1fpCrLHupZv1fTpl3xXBSplZ-nq7G6Vyg" alt="pieuvremeca" title="pieuvre méca"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div> 
                <div class='column'>
                    <figure class="image">
                        <img width="390" src="https://drive.google.com/uc?id=17uVgCUmaHiYYViIdUEgjSr1gvuAa61ID" alt="pirhanameca" title="pirhana méca"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div>
                <div class='column'>
                     <figure class="image">
                        <img width="390" src="https://drive.google.com/uc?id=1TNQpi7myoXTP2T8piMJKJVAEK9aqSkc2" alt="ninjacyborg" title="ninja cyborg idle"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div>
                <div class='column'>
                    <figure class="image"data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                        <img>
                    </figure>
                </div>
                
            </div>

        </div>

        <!-- ########################################################-->
        <!-- ########################################################-->
        <!-- ########################################################-->
        <!-- ########################################################-->


    
        <!-- ########################################################-->
        <!-- ########################################################-->
        <!-- #####################GAME CARD###########################-->
        <!-- ########################################################-->
        <div id="games">
            <h3 class="subtitle is-2 has-text-centered"><?php echo $lang['GAME_TITLE']; ?></h3>
        <div class="columns">

            <div class="column"> 
                <div class="card ">
                    <div class="card-image">
                        <figure class="image">
                        <img src="https://img.itch.zone/aW1hZ2UvMTgyMDkwLzg1MDg0Mi5qcGc=/347x500/Mb7hcx.jpg" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                        <div class="media-content">
                            <p class="title is-4" title="Maxime MARTIN">MaxCoder</p>
                            <p class="subtitle is-6"><a href="https://twitter.com/maxIndieDev?lang=fr" target="_blank">@maxIndieDev</a></p>
                        </div>
                        </div>

                        <div class="content">
                        <h3 class="subtitle is-3">Portal or not Portal</h3>
                        <p>
                            <?php echo $lang['GAME_1']; ?><a href="https://www.gamecodeur.fr/" class="has-text-link">Gamecodeur</a>.<br>
                        <a href="https://twitter.com/search?q=%23Lua&src=tyah&lang=fr" target="_blank">#lua</a><a href="https://twitter.com/search?q=%23love2d&src=typd&lang=fr" target="_blank">#love2d</a><a href="https://twitter.com/search?q=%23gamecodeur&src=typd&lang=fr" target="_blank">#gamecodeur </a><a href="https://twitter.com/search?q=%23gamejam&src=typd&lang=fr" target="_blank">#gameJam</a>
                        <br>
                        <time datetime="2017-10-07"><?php echo $lang['DATE_1']; ?></time>
                        </p>
                        <a href="https://maxncoder.itch.io/portal-or-not-portal" class="button is-link " target="_blank"><?php echo $lang['GAME_BTN']; ?></a>
                        <!-- <a href="" class="button is-medium is-danger">Télécharger</a> -->
                        </div>
                    </div>
                </div>
            </div>

         <div class="column"> 
                <div class="card ">
                    <div class="card-image">
                        <figure class="image">
                        <img src="https://img.itch.zone/aW1hZ2UvMTg4NTE1Lzg4MTgwMi5wbmc=/347x500/PY2xeE.png" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                        <div class="media-content">
                            <p class="title is-4" title="Maxime MARTIN">MaxCoder</p>
                            <p class="subtitle is-6"><a href="https://twitter.com/maxIndieDev?lang=fr" target="_blank">@maxIndieDev</a></p>
                        </div>
                        </div>

                        <div class="content">
                        <h3 class="subtitle is-3">Halloween of Boby</h3>
                        <p>
                            <?php echo $lang['GAME_2']; ?> <a href="https://www.gamecodeur.fr/" class="has-text-link">Gamecodeur</a>.<br>
                             <?php echo $lang['GAME_2_BIS']; ?><br>
                        <a href="https://twitter.com/search?q=%23Lua&src=tyah&lang=fr" target="_blank">#lua</a><a href="https://twitter.com/search?q=%23love2d&src=typd&lang=fr" target="_blank">#love2d</a><a href="https://twitter.com/search?q=%23gamecodeur&src=typd&lang=fr" target="_blank">#gamecodeur </a><a href="https://twitter.com/search?q=%23gamejam&src=typd&lang=fr" target="_blank">#gameJam</a>
                        <br>
                        <time datetime="2017-10-29"><?php echo $lang['DATE_2']; ?></time>
                        </p>
                        <a href="https://maxncoder.itch.io/halloween-of-bobby" class="button is-link " target="_blank"><?php echo $lang['GAME_BTN']; ?></a>
                        <!-- <button class="button is-medium is-danger">Télécharger</button> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="column"> 
                <div class="card ">
                    <div class="card-image">
                        <figure class="image">
                        <img src="https://img.itch.zone/aW1hZ2UvMTk4NjgyLzk0NjU2Mi5naWY=/347x500/7zafb4.gif" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                        <div class="media-content">
                            <p class="title is-4" title="Maxime MARTIN">MaxCoder</p>
                            <p class="subtitle is-6"><a href="https://twitter.com/maxIndieDev?lang=fr" target="_blank">@maxIndieDev</a></p>
                        </div>
                        </div>

                        <div class="content">
                        <h3 class="subtitle is-3">killBall</h3>
                        <p>
                            <?php echo $lang['GAME_3']; ?> <a href="https://www.gamecodeur.fr/" class="has-text-link">Gamecodeur</a>.<br>
                        <a href="https://twitter.com/search?q=%23Lua&src=tyah&lang=fr" target="_blank">#lua</a><a href="https://twitter.com/search?q=%23love2d&src=typd&lang=fr" target="_blank">#love2d</a><a href="https://twitter.com/search?q=%23gamecodeur&src=typd&lang=fr" target="_blank">#gamecodeur </a><a href="https://twitter.com/search?q=%23gamejam&src=typd&lang=fr" target="_blank">#gameJam</a>
                        <br>
                        <time datetime="2017-11-29"><?php echo $lang['DATE_3']; ?></time>
                        </p>
                        <a href="https://maxncoder.itch.io/killball" class="button is-link " target="_blank"><?php echo $lang['GAME_BTN']; ?></a>
                        <!-- <button class="button is-medium is-danger">Télécharger</button> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="column"> 
                <div class="card ">
                    <div class="card-image">
                        <figure class="image">
                        <img src="https://img.itch.zone/aW1hZ2UvMjE4MzgyLzEwMzgxODkucG5n/347x500/GqTmhB.png" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                        <div class="media-content">
                            <p class="title is-4" title="Maxime MARTIN">MaxCoder</p>
                            <p class="subtitle is-6"><a href="https://twitter.com/maxIndieDev?lang=fr" target="_blank">@maxIndieDev</a></p>
                        </div>
                        </div>

                        <div class="content">
                        <h3 class="subtitle is-3">Sokoban</h3>
                        <p>
                            <?php echo $lang['GAME_4']; ?> <a href="https://www.gamecodeur.fr/" class="has-text-link">Gamecodeur</a>.<br>
                        <a href="https://twitter.com/search?q=%23Lua&src=tyah&lang=fr" target="_blank">#lua</a><a href="https://twitter.com/search?q=%23love2d&src=typd&lang=fr" target="_blank">#love2d</a><a href="https://twitter.com/search?q=%23gamecodeur&src=typd&lang=fr" target="_blank">#gamecodeur </a><a href="https://twitter.com/search?q=%23gamejam&src=typd&lang=fr" target="_blank">#gameJam</a>
                        <br>
                        <time datetime="2017-02-02"><?php echo $lang['DATE_4']; ?></time>
                        </p>
                        <a href="https://maxncoder.itch.io/sokobannot-ended" class="button is-link " target="_blank"><?php echo $lang['GAME_BTN']; ?></a>
                        <!-- <button class="button is-medium is-danger">Télécharger</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="columns">
            <div class="column"> 
                <div class="card ">
                    <div class="card-image">
                        <figure class="image">
                        <img src="https://img.itch.zone/aW1hZ2UvMjIzOTE2LzEwNjA4MzAuZ2lm/347x500/Pn%2BxHa.gif" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                        <div class="media-content">
                            <p class="title is-4" title="Maxime MARTIN">MaxCoder</p>
                            <p class="subtitle is-6"><a href="https://twitter.com/maxIndieDev?lang=fr" target="_blank">@maxIndieDev</a></p>
                        </div>
                        </div>

                        <div class="content">
                        <h3 class="subtitle is-3">Propelman in sky</h3>
                        <p>
                            <?php echo $lang['GAME_5']; ?><br>
                        <a href="https://twitter.com/search?q=%23Lua&src=tyah&lang=fr" target="_blank">#lua</a><a href="https://twitter.com/search?q=%23love2d&src=typd&lang=fr" target="_blank">#love2d</a>
                        <br>
                        <time datetime="2017-02-13"><?php echo $lang['DATE_5']; ?></time>
                        </p>
                        <a href="https://maxncoder.itch.io/propelman-vs-missiles" class="button is-link " target="_blank"><?php echo $lang['GAME_BTN']; ?></a>
                        <!-- <button class="button is-medium is-danger">Télécharger</button> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="column"> 
                <div class="card ">
                    <div class="card-image">
                        <figure class="image">
                        <img src="https://img.itch.zone/aW1hZ2UvMjMxMDY3LzEwOTUwNzYucG5n/315x250%23c/pLhtf7.png" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                        <div class="media-content">
                            <p class="title is-4" title="Maxime MARTIN">MaxCoder</p>
                            <p class="subtitle is-6"><a href="https://twitter.com/maxIndieDev?lang=fr" target="_blank">@maxIndieDev</a> & <a href="https://www.facebook.com/michael.lethiec.98" target="_blank">Stormbringer</a></p>
                        </div>
                        </div>

                        <div class="content">
                        <h3 class="subtitle is-3">The Depths battle</h3>
                        <p>
                           <?php echo $lang['GAME_6']; ?> <a href="https://www.gamecodeur.fr/" class="has-text-link"><?php echo $lang['GAME_6_BIS']; ?><br>
                        <a href="https://twitter.com/search?q=%23Lua&src=tyah&lang=fr" target="_blank">#lua</a><a href="https://twitter.com/search?q=%23love2d&src=typd&lang=fr" target="_blank">#love2d</a><a href="https://twitter.com/search?q=%23gamecodeur&src=typd&lang=fr" target="_blank">#gamecodeur </a><a href="https://twitter.com/search?q=%23gamejam&src=typd&lang=fr" target="_blank">#gameJam</a>
                        <br>
                        <time datetime="2017-03-06"><?php echo $lang['DATE_6']; ?></time>
                        </p>
                        <a href="https://maxncoder.itch.io/the-depths-battle" class="button is-link " target="_blank"><?php echo $lang['GAME_BTN']; ?></a>
                        <!-- <button class="button is-medium is-danger">Télécharger</button> -->
                        </div>
                    </div>
                </div>
            </div>

            <div class="column"> 
                <div class="card ">
                    <div class="card-image">
                        <figure class="image">
                        <img src="https://img.itch.zone/aW1hZ2UvMjM5NzM3LzExNDE4NzUuZ2lm/347x500/lR6J94.gif" alt="Placeholder image">
                        </figure>
                    </div>
                    <div class="card-content">
                        <div class="media">
                        <div class="media-content">
                            <p class="title is-4" title="Maxime MARTIN">MaxCoder</p>
                            <p class="subtitle is-6"><a href="https://twitter.com/maxIndieDev?lang=fr" target="_blank">@maxIndieDev</a></p>
                        </div>
                        </div>

                        <div class="content">
                        <h3 class="subtitle is-3">Eat it!</h3>
                        <p>
                            <?php echo $lang['GAME_7']; ?><br><?php echo $lang['GAME_6_BIS']; ?><br>
                        <a href="https://twitter.com/JavaScript?lang=fr">#javascript</a><a href="https://twitter.com/phaser_js">#phaser</a>
                        <br>
                        <time datetime="2017-03-28"><?php echo $lang['DATE_7']; ?></time>
                        </p>
                        <a href="https://eat-it.netlify.com/" class="button is-link " target="_blank"><?php echo $lang['GAME_BTN']; ?></a>
                        <!-- <button class="button is-medium is-danger">Télécharger</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- </div> -->
        <!-- ########################################################-->
        <!-- ########################################################-->
        <!-- ########################################################-->


         <!-- ########################################################-->
        <!-- ########################################################-->
        <!-- #####################   VUE   ###########################-->
        <!-- ########################################################-->

        <!-- ########################################################-->
        <!-- ########################################################-->
        <!-- ########################################################-->


        <form id="contact" class="section container" name="contactform" method="post" action="send.php">
            <h3 class="subtitle is-2"><?php echo $lang['MENU_CONTACT']; ?></h3>
        <div class="field">
            <!-- <label class="label">Prénom - Nom</label> -->
            <div class="control">
                <input class="input" type="text" name="name" placeholder="<?php echo $lang['CONTACT_NAME']; ?>"required>
            </div>
        </div>
        
        
        <div class="field">
            <!-- <label class="label">Email</label> -->
            <div class="control has-icons-left has-icons-right">
                <input class="input is-info" type="text" name="email" placeholder="<?php echo $lang['CONTACT_MAIL']; ?>" value=""required>
                <span class="icon is-small is-left">
                    <i class="fas fa-envelope"></i>
                </span>
            </div>
            <!-- <p class="help is-danger">Cette adresse mail n'est pas valide</p> -->
        </div>
        
            <div class="field">
                <!-- <label class="label">Téléphone</label> -->
                <div class="control has-icons-left has-icons-right">
                    <input class="input is-info" type="phone" name="phone" placeholder="<?php echo $lang['CONTACT_PHONE']; ?>" value=""required>
                    <span class="icon is-small is-left">
                        <i class="fas fa-phone"></i>
                    </span>
                </div>
            </div>

        <div class="field">
            <!-- <label class="label">Message</label> -->
            <div class="control">
                <textarea class="textarea" name="message" placeholder="Message" ></textarea>
            </div>
        </div>

        <div class="field is-grouped">
            <div class="control">
                <button  class="button is-medium is-link" type="submit" value="Submit"required onclick="sendCheck()"><?php echo $lang['CONTACT_SEND']; ?></button>
            </div>
        </div>

    </form>
    <div id="footer" class="has-background-dark ">
            <div class ="content has-text-centered" >
                <a href="https://github.com/MaxDevProjects" target="_blank" class="has-text-grey-lighter"><i class="fab fa-github fa-2x"></i></a>
                <a href="https://www.linkedin.com/in/maxime--martin/" target="_blank" class="has-text-grey-lighter"><i class="fab fa-linkedin fa-2x"></i></a>
                <a href="https://twitter.com/maxIndieDev?lang=fr" target="_blank" class="has-text-grey-lighter"><i class="fab fa-twitter-square fa-2x"></i></a>
                <a href="https://www.facebook.com/maxNcoder/?ref=bookmarks" target="_blank" class="has-text-grey-lighter"><i class="fab fa-facebook-square fa-2x"></i></a>
                <p class="has-text-light"><?php echo $lang['FOOTER_REALISED']; ?><a href="https://bulma.io/"  class="has-text-info">Bulma</a></p>
            </div>
    </div>
    
</body>


    <script>
        $(document).ready(function() {
            // Check for click events on the navbar burger icon
            $(".navbar-burger").click(function() {
                
                
                // Toggle the "is-active" class on both the "navbar-burger" and the "navbar-menu"
                $(".navbar-burger").toggleClass("is-active");
                $(".navbar-menu").toggleClass("is-active");

                // close burger menu onclick
                $(".navbar-item").click(function() {
                    $(".navbar-menu").toggleClass("is-active").close();
                });
                return $(".navbar-burger").toggleClass("is-active");
                
                
            });
            
            
            
            $('.js-scrollTo').on('click', function () { // Au clic sur un élément
                // console.log("scroll");
                var page = jQuery(this).attr('href'); // Page cible
                
                var speed = 750; // Durée de l'animation (en ms)
                $('html, body').animate({ scrollTop: jQuery(page).offset().top - 55 }, speed); // Go
                return false;
                
    });
    
});
    </script>

    <script>
        function myFunction() {
            document.getElementById("games").style.display = "initial";
            document.getElementById("pixels").style.display = "none";

        }

        function myFunctionPixel() {
            document.getElementById("pixels").style.display = "initial";
            document.getElementById("games").style.display = "none";
        }

        function sendCheck() {
            alert("<?php echo $lang['MSG_SEND']; ?>");
        }
    </script>

    <script>
        AOS.init();
    </script>


   

</html>