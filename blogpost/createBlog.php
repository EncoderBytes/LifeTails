<?php
include "../database/config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/9f56dfd8f1.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abel&family=Anton&family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;1,400&family=Lexend:wght@100;200;300;400;500&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="../styles/style.css">
        <link rel="stylesheet" href="../styles/createpost-style.css">


    <title>LifeTails</title>
</head>
<body>
    <nav>
        <div class="nav-menu flex-row">
            <div class="nav-brand">
                <a href="../index.php">LifeTails</a>
            </div>
            <ul class="nav-items">
                <li class="nav-links">
                    <a href="../index.php">Home</a>
                </li>
                <li class="nav-links">
                    <a href="#">Catagory</a>
                </li>
                <li class="nav-links">
                    <a href="#">Archives</a>
                </li>
                <li class="nav-links">
                    <a href="#">Pages</a>
                </li>
                <li class="nav-links">
                    <a href="#">Contact us</a>
                </li>
            </ul>
            <div class="social-links">
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram-square"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </nav> <hr>
    <!-- creating a post -->
    <form action="" method="POST">
         <div class="createPost">
            <h1>Post your LifeTails</h1>
            <div class="createPost-content">
                <div class="createPost-title">
                    <div class="createPost-img">
                        <h2>Upload your Image</h2>
                        <input name="p_image" type="file">
                    </div>
                    <div class="createPost-info">
                        <input name="p_info" type="date">
                    </div>
                    <h2>Add your Post title</h2>
                    <textarea name="p_title" id="" cols="40" rows="2"></textarea>
                </div>
                <h2>Add your Post Content</h2>
                <textarea name="p_content" id="" cols="40" rows="2"></textarea>
            </div>
            <button name="upload_post">upload</button>
         </div>
    </form>


    <footer>
        <div class="footer-wrapper">
            <div class="Aboutus">
                <h2>About us</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Nam incidunt eos delectus illum vero ex eligendi, hic vitae, 
                    corporis quisquam porro voluptatem nesciunt laudantium. 
                    Libero tempora ipsa dolorum consectetur accusamus.
                </p>
            </div>

            <div class="Newsletter">
                <h2>Newsletter</h2>
                <p>Stay updated with our latest</p>
                <input type="Email" placeholder="Email">
            </div>

            <div class="Followus">
                <h2>Follow us</h2>
                <p>Let us be Socail</p>
                <a href="#"><i class="fab fa-facebook"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-youtube"></i></a>
            </div>
            
            <div class="Footerline">
                <h4>Copyrights &copy 2021, All rights reserved | made by <a href="#">Muhammad Osama Javaid</a></h4>
            </div>
        </div>
    </footer>    


</body>
</html>