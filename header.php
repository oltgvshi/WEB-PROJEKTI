<link rel="stylesheet" href="css\style.css">
<header>
            <div id="left">
                <a href="index.php"><img src="Logo/Logo_white.png" alt="Logo" id="logoheader"></a>
            </div>

            <div id="butonat">
                <a href="index.php" class="headerdiv">Home</a>
                <a href="contactform.php">Contact</a>
            <?php
                if(!isset($_SESSION['username'])){
                     echo '<a href="login.php"><button id="log">Login</button></a>';
                    }
                    else if(isset($_SESSION['username'])){
                        echo '<a href="logout.php"><button id="log">Logout</button></a>';
                    }        
                ?>
                <?php
                if(!isset($_SESSION['username'])){
                     echo '<a href="register.php"><button id="reg">Register</button></a';
                    }else{ ?>
                    <a href='dashboard.php'> <button id="reg" class="<?php echo $hide ?>">Dashboard</button></a>
                    <?php
                    }
                    
                ?>
            </div>
        </header>

        