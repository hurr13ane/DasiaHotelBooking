<div class="container-fluid">
    <div class="inner-header">
            <div class="logo">
                <a href="./index.php"><img src="img/logo1.png" alt=""></a>
            </div>
            
            <nav class="main-menu mobile-menu">
                <ul>
                    <li><a href="./index.php">Home</a></li>
                    <li><a href="videos/videos.php">RPA Videos</a></li>
                    <li><a href="./about-us.php">About</a></li>
                    <li><a href="/rooms.php">Rooms</a></li>
                    
                    <li class=""><a href="./contact.php">Contact</a></li>
                    <li class=""><a href="./adaugRezervari.php">Make a Reservation</a></li>
                    <li class="" id="adminPanel"><li>
                    <?php 
                        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
                            echo '<script> document.getElementById("adminPanel").innerHTML = ``; </script>'; 
                        }
                        else
                        {
                            echo '<script> document.getElementById("adminPanel").innerHTML = `<a style="color:#F9AD81;" class="" href="./admin.php">Admin Panel</a>`; </script>'; 


                        }
                    ?>
                    
                    <li class="login" id="checkLogin"><li>
                    <?php 
                        if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
                            echo '<script> document.getElementById("checkLogin").innerHTML = `<a style="color:white;" class="" href="./login.php"><i class="fa fa-lock">_Login</a>`; </script>'; 
                        }
                        else
                        {
                            echo '<script> document.getElementById("checkLogin").innerHTML = `<a href="logout.php" style="color:red;" class=""><i class="fa fa-lock"></i> Logout</a>`; </script>'; 
                        }
                    ?>

                    
                    
                </ul>
            </nav>
            <div id="mobile-menu-wrap"></div>
        </div>
    </div>