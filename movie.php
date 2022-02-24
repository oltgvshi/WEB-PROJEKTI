<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css\style.css">
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        <script src="https://kit.fontawesome.com/4480201544.js" crossorigin="anonymous"></script>
        <title></title>
    </head>
    <body>
        <header>
            <div id="left">
                <a href="index.html"><img src="Logo/Logo_white.png" alt="Logo" id="logoheader"></a>
                <b><h2 id="topbrowse">Browse</h2></b>
            </div>

            <div id="search">
                <input id="searchinput" type="text" placeholder="Search a movie">
            </div>

            <div id="butonat">
                <a href="register.html"><button id="reg">Register</button></a>
                <a href="login.html"><button id="log">Login</button></a>
            </div>
        </header>
       
        <div class="main">
            <iframe width="100%"  height="900px" src="https://www.youtube.com/embed/JfVOs4VSpmA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            <div class="description">
                <div class="img">
                    <img src="movieposters/nowayhome.jpg" alt="" class="movieposterimg">
                    <button class="addlist">Add to My List</button>
                </div>

                <div class="descr">
                    <h1 class="movietitledsc">Spiderman No Way Home</h1>
                    <hr class="horizontal">
                    <p class="moviedescript">(2018) · 1 hr 22 min</p>
                    <p class="moviedescript">Comedy, Drama, Romance</p>
                    <br>
                    <p class="tematika">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec metus orci, cursus eget semper et, eleifend et diam. Proin laoreet scelerisque venenatis. Etiam magna leo, hendrerit vel justo feugiat, euismod tristique libero. Nulla ultricies rutrum lorem, at luctus augue volutpat facilisis. Quisque vitae suscipit quam, nec sollicitudin augue. Nulla pellentesque ut nunc quis lacinia. Praesent vel erat nulla. Curabitur ultrices, ex et feugiat interdum, leo ex maximus purus, ac laoreet quam tellus id diam. Pellentesque auctor turpis in malesuada elementum. Fusce ut sem nec ligula imperdiet blandit. In hac habitasse platea dictumst. Sed convallis augue ante, volutpat viverra dolor posuere sit amet. Integer vitae suscipit magna. Nunc ornare dapibus elementum. Mauris bibendum bibendum massa.</p>
                    <hr class="horizontal">
                    
                </div>
            </div>

        </div>

        <?php
        require_once('footer.php');
        ?>
        <script src="javascript\script.js"></script>
    </body>
</html>