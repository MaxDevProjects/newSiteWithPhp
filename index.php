<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Maxime Martin Développeur web Front end Nantes France</title>
    <link rel="ico" href="favicon.png">
    <link rel="canonical" href="https://www.maximemartin.pro/"/>
    <meta title="developpeur web, web concepteur, Webdesigner, maxime martin, nantes">
    <meta name="author" content="Maxime Martin">
    <meta name="description" content="Maxime Martin développeur web front-end bootstrap et Bulma en région Nantaise. Marketing et Communication Digital. Concepteur web, développeur web,  web designer">
    <meta name="keywords" content="maxime martin, freelance, developpeur web, webdesign,HTML, CSS, JavaScript, bootstrap, bulma, nantes">

    <link rel="stylesheet" href="./node_modules/bulma/css/bulma.css">
    <script src="jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="style/style.css">
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

        <div class="header">
            <div class="container is-fluid ">
                <h1 id="name" class="title has-text-light">Maxime</h1>
                <h3 id="nickname" class="title has-text-light">MARTIN</h3>
                <h4 id="activity" class="subtitle is-4"><?php echo $lang['HEAD_ACTIVITY']; ?> <br> Front-end</h4>
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
                        <img src="img/html5-css3.svg" title="HTML5/CSS3">
                        <!-- <i class="fab fa-css3-alt fa-9x"  title="CSS3"></i> -->
                        <!-- <img src="img/css3.svg" title="css3"> -->
                        
                    </div>
                    <div class="column has-text-centered tech" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-delay="0" >
                        <a  href="https://virtualcard-maxime-martin.netlify.com" target="_blank" class="js-scrollTo" onclick="myFunctionVue()"><img id="bootstrap" src="img/bootstrap.svg" title="Bootstrap"></img>
                    </div>
                    <div class="column has-text-centered tech" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-delay="50">
                        <a  href="#home" target="_blank" class="js-scrollTo" onclick="myFunctionVue()"><img id="bulma" src="img/bulma.svg" title="Bulma">
                    </div>
                </div>
                <div class="columns" >
                    <div class="column has-text-centered tech" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-delay="100">
                        <!-- <i class="fab fa-js-square fa-9x"  ></i> -->
                        <a  href="https://eat-it.netlify.com" target="_blank" class="js-scrollTo" onclick="myFunctionVue()"><img id="js" src="img/js.svg" title="JAVASCRIPT"></a>
                    </div>
                    <div class="column has-text-centered tech" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-delay="150">
                        <!-- <i class="fab fa-vuejs fa-9x"  ></i> -->
                        <a  href="https://lm-texteditor.netlify.com" target="_blank" class="js-scrollTo" onclick="myFunctionVue()"><img id="vue" src="img/vuejs.svg" title="VUEJS"></a>
                    </div>
                    <div class="column has-text-centered tech" data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-delay="200">
                        <a  href="#pixels" class="js-scrollTo" onclick="myFunctionPixel()"><img id="photoshop" src="img/photoshop.svg" title="photoshop - pixelArt"></a>
                    </div>
                    <div class="column has-text-centered tech"  data-aos="zoom-in" data-aos-easing="ease-in-out" data-aos-delay="250">
                        <a  href="#games" class="js-scrollTo" onclick="myFunction()"><img id="gamepad" src="img/gamepad-solid.svg" title="GameDev"></a>
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
                    <figure class="image"><img  width="390"src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/24993299_185228038697131_6425015128128854619_n.jpg?_nc_cat=0&oh=0ee7c5fa61c42b11dcaa96358de8167e&oe=5BCE855F" alt="candle" title="light" data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0"></figure>
                </div>
                <div class='column'>
                    <figure class="image"><img  width="390" src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/24909909_185228048697130_4762832510546834883_n.jpg?_nc_cat=0&oh=107e0f1dc7e644dae7d7960ce4ea6944&oe=5BC60C65" alt="BBB" title="Buy By Blood"
                    data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0"></figure>
                </div>
                <div class='column'>
                    <figure class="image"><img width="390" src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/24775258_185228065363795_1531795491034266468_n.jpg?_nc_cat=0&oh=0b52abb785e3615c40589259ed174ff5&oe=5BD7F912" alt="steampunkGun" title='steampunkGun'
                    data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0"></figure>
                </div>
                <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/24862292_185228082030460_1620372317920365697_n.jpg?_nc_cat=0&oh=030594ee81e0531fcf54e885d72a767a&oe=5BE68EA6" alt="" title=""
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div>
            </div>
            <div class="columns">
                <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/25152040_185228102030458_5835821132316262323_n.jpg?_nc_cat=0&oh=89e5ffca131aac3f74f8e9f787f5b4a8&oe=5BCF121B" alt="chickenWings" title="chickenWings"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div>
                <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/24796832_185228118697123_8556129455929762396_n.jpg?_nc_cat=0&oh=5b5cda05d3af6d499a748272d6878e51&oe=5BE0B656" alt="nessy" title="Nessy"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div>
                <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/24900140_185228135363788_365948732792584961_n.jpg?_nc_cat=0&oh=e5000a730c1545c3a2b2d5d688807d24&oe=5BD89CD2" alt="Apple" title="Apple"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div> 
                <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/24862162_185228152030453_3518397973185526346_n.jpg?_nc_cat=0&oh=64cc2d7a256eb83da12e0d94f042c8f7&oe=5BE333AE" alt="MonstreDeFranckeinstein" title="Monstre de Franckeinstein"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div>
            </div>

            <div class="columns">
                <div class='column'>
                    <figure class="image">
                        <img width="390" src="./img/magic.gif" alt="wand" title="magic"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div>
                <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/24852623_185228172030451_2541025766667341968_n.jpg?_nc_cat=0&oh=5de06b68fda475e40a62f2ab759731f2&oe=5BDC5370" alt="3d iso" title="3d iso"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div> 
                 <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/24909576_185228192030449_7214266421165650053_n.jpg?_nc_cat=0&oh=f4906c5ea63f669b99223a3a3f1dd695&oe=5BE7D9E5" alt="Xmas" title="Happy Xmas"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div> 
                <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/24862253_185228208697114_8116629022703898636_n.jpg?_nc_cat=0&oh=c78fffc396cfeca5ec752120a3be239b&oe=5BCA67D2" alt="Link" title="Mon hero de jeu vidéo préféré"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div> 
            </div>
            
            <div class="columns">
                <div class='column'>
                    <figure class="image">
                        <img width="390" src="https://scontent-cdg2-1.xx.fbcdn.net/v/t1.0-9/24796377_185228218697113_5899752637259634791_n.jpg?_nc_cat=0&oh=37a2b411195e6542f710665545fbbcba&oe=5BC8C3B2" alt="randoneur" title="le randoneur"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div>
                <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://pbs.twimg.com/media/DRAZ21RUMAAL1E5.jpg:large" alt="mrjack" title="Mr Jack"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div> 
                 <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://pbs.twimg.com/media/DRGH7hoX4AUtIDJ.jpg:large" alt="palmier" title="île déserte"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div> 
                <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://pbs.twimg.com/media/DRU05ocX4AAWWI3.jpg" alt="fléau d'arme" title="fléau d'arme"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div> 
            </div>

            <div class="columns">
                <div class='column'>
                    <figure class="image">
                        <img width="390" src="https://pbs.twimg.com/media/DRZy_qUW0AAieDQ.jpg:large" alt="materiaux" title="materiaux"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div>
                <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://pbs.twimg.com/media/DSx_hdAW0AUDeTD.jpg" alt="Lonely" title="Seul au monde"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div> 

                 <div class='column'>
                    <figure class="image">
                        <img width="390"src="https://pbs.twimg.com/media/DTK9V8cWkAAMEax.jpg" alt="tilesheet" title="tilesheet du jeu Sokoban"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div> 
                <div class='column'>
                    <figure class="image">
                        <img width="390"src="./img/wreath.jpg" alt="couronne" title="couronne"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div> 
            </div>
            
            <div class="columns">

                <div class='column'>
                    <figure class="image">
                        <img width="390"src="./img/pieuvreMeca.gif" alt="pieuvremeca" title="pieuvre méca"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div> 
                <div class='column'>
                    <figure class="image">
                        <img width="390" src="./img/pirhanaMeca.gif" alt="pirhanameca" title="pirhana méca"
                        data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                    </figure>
                </div>
                <div class='column'>
                    <figure class="image"data-aos="flip-left" data-aos-easing="ease-in-out" data-aos-delay="0">
                        <img>
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
                            <?php echo $lang['GAME_2']; ?> <a href="https://www.gamecodeur.fr//" class="has-text-link">Gamecodeur</a>.<br>
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

</div>
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
                <button onclick="sendCheck()" class="button is-medium is-link" type="submit" value="Submit"required><?php echo $lang['CONTACT_SEND']; ?></button>
            </div>
        </div>

    </form>

</body>

<footer id="footer" class="">
        <div class="content has-text-centered has-background-dark">
            <a href="https://github.com/MaxDevProjects" target="_blank" class="has-text-grey-lighter"><i class="fab fa-github fa-2x"></i></a>
            <a href="https://www.linkedin.com/in/maxime--martin/" target="_blank" class="has-text-grey-lighter"><i class="fab fa-linkedin fa-2x"></i></a>
            <a href="https://twitter.com/maxIndieDev?lang=fr" target="_blank" class="has-text-grey-lighter"><i class="fab fa-twitter-square fa-2x"></i></a>
            <a href="https://www.facebook.com/maxNcoder/?ref=bookmarks" target="_blank" class="has-text-grey-lighter"><i class="fab fa-facebook-square fa-2x"></i></a>
            <p class="has-text-light"><?php echo $lang['FOOTER_REALISED']; ?><a href="https://bulma.io/"  class="has-text-info">Bulma</a></p>
        </div>
</footer>

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
                return $(".navbar-burger").toggleClass("is-active")= true;
                
                
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