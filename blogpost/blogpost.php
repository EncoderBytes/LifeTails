<?php
        include('../database/config.php');
        $sql = "SELECT * FROM blog_post";
        $query = mysqli_query($conn, $sql);
        // $single_query = mysqli_num_rows($query);
        // print_r($single_query);
        $row =  mysqli_fetch_assoc($query);
        // print_r($row);
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
        <link rel="stylesheet" href="../styles/blogpost-style.css">


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
    

    <div class="postpublished">

        <div class="postpublished-post">
            <div class="postpublished-content">
                <div class="postpublished-title">
                    <h1><?php echo $row['title']?></h1>
                    <div class="postpublished-info">
                        <span><i class="fas fa-user text-grey"></i>&nbsp;&nbsp;Admin</span><br>
                        <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;<?php echo $row['info']?></span>
                    </div>
                    
                    <div class="postpublished-img">
                    <img src="<?php echo '../image/' . $row['img'] ?>" alt="image here">
                    </div>               
                </div>

                <p>
                    <?php echo $row['content']?>
                </p>
    
            </div>
        </div>
        
        <aside>
            
            <div class="recentposts">
                <h1>Recent Posts</h1>
                    <div class="recentpost-title">
                        <div class="recentpost-img">
                            <img src="../assets/popular-post/m-blog-1.jpg" alt="">
                            <div class="recentpost-info">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;September 27, 2021&nbsp;&nbsp;</span>
                                <span>2 Comments</span>
                            </div>
                        </div>
                        <a href="#">Now Is The Time For You To Know The Truth About Politics.</a>
                    </div>

            </div>

            <div class="mostview">
                <h1>Most view tags</h1>
                <div class="mostview-tags">
                    <span class="mostview-tag">Software</span>
                    <span class="mostview-tag">Study</span>
                    <span class="mostview-tag">Sports</span>
                    <span class="mostview-tag">Health</span>
                    <span class="mostview-tag">Travel</span>
                    <span class="mostview-tag">Travel</span>
                    <span class="mostview-tag">Projects</span>
                    <span class="mostview-tag">Love</span>
                    <span class="mostview-tag">Design</span>
                    <span class="mostview-tag">Illustrations</span>
                    <span class="mostview-tag">Politics</span>
                </div>
            </div>

        </aside>
    </div>

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