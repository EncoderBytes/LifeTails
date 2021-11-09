<?php
include('database/config.php');
// include "blogpost/createBlog.php"
static $pid = 0;
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

    <!-- jQuery links below -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- style links for owl carosel below -->
    <link rel="stylesheet" href="styles/owl.carousel.min.css">
    <link rel="stylesheet" href="styles/owl.theme.default.min.css">
    <link rel="stylesheet" href="styles/style.css" type="text/css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.carousel.min.css">
    <link rel="sty  lesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/assets/owl.theme.default.min.css"> -->

    <title>LifeTails</title>
</head>

<body>
    <nav>
        <div class="nav-menu flex-row">
            <div class="toggle-collapse">
                <div class="toggle-icon">
                    <i class="fas fa-bars"></i>
                </div>
            </div>
            <div class="nav-brand">
                <a href="index.php">LifeTails</a>
            </div>
            <ul class="nav-items">
                <li class="nav-links">
                    <a href="#">Home</a>
                </li>
                <li class="nav-links">
                    <a href="#">Catagory</a>
                </li>
                <li class="nav-links">
                    <a href="#">Archives</a>
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
    </nav>
    <!-- there is the end of navbar  -->
    <div class="main-cover">
        <section>
            <div class="main-text">
                <h2>Tour & Travel</h2>
                <h1>Amazing Place on the Earth</h1>
                <button>Explore</button>
            </div>
        </section>
    </div>

    <!-- section3 division below-->

    <?php
        $sql = "SELECT * FROM blog_post";
        $query = mysqli_query($conn, $sql);

        
        // $data = array();
        // if(mysqli_num_rows($query)>0){
        //     while($row = mysqli_fetch_assoc($query)){
        //         $data[] = $row['id'];
        //     }
        // }
        // print_r($data[4]);
        
    ?>
    <div class="section3">
        <div class="siteContent">
            <div class="posts">
                <h1>Just In.</h1>
                <?php
                   foreach ($query as $q) 
                   { ?>
                    <div class="postContent">
                        <div class="postImg">
                            <div class="img">
                            <img src="<?php echo 'image/' . $q['img'] ?>" alt="">
                            </div>

                            <div class="postInfo">
                                <span><i class="fas fa-user text-grey"></i>&nbsp;&nbsp;Admin</span>
                                <span name = "p_info"><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;<?php echo $q['info']; ?></span>
                                <span>2 Comments</span>
                            </div>
                        </div>
                        <div class="post-title">
                            <a href="" name="p_title" target="_blank"><?php echo $q['title'];?>                                                   </a>
     
                            <p name="p_content"><?php
                                                    echo substr($q['content'],0,250);
                                                 ?>
                            </p>
                            <button name="btn"><?php echo "<a href='blogpost/blogpost.php?id=".$q['id']."' >Read More</a>"?></button>
                        </div>
                    </div>

                <?php
            }
           
            ?>
                <!-- create your own blog -->
                <div class="createPost">
                    <button><a href="blogpost/createBlog.php">Create your Own Blog</a></button>
                </div>
            </div>
            <aside class="sidebar">
                <!-- category part -->
                <div class="catagory">
                    <h1>Catagory</h1>
                    <ul class="catagorylist">
                        <li class="list-item">
                            <a href="#">Software</a>
                            <span>(12)</span>
                        </li>
                        <li class="list-item">
                            <a href="#">Software</a>
                            <span>(12)</span>
                        </li>
                        <li class="list-item">
                            <a href="#">Software</a>
                            <span>(12)</span>
                        </li>
                        <li class="list-item">
                            <a href="#">Software</a>
                            <span>(12)</span>
                        </li>
                        <li class="list-item">
                            <a href="#">Software</a>
                            <span>(12)</span>
                        </li>
                    </ul>
                </div>
                <!-- category part ended here -->

                <!-- popular posts are below -->
                <div class="popularPost">
                    <h1>Popular Posts</h1>
                    <div class="popularPost-content">
                        <div class="popularPost-img">
                            <div class="popularImage">
                                <img src="assets/popular-post/m-blog-1.jpg" alt="">
                            </div>
                            <div class="popularPost-info">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;September 27, 2021&nbsp;&nbsp;</span>
                                <span>2 Comments</span>
                            </div>
                        </div>
                        <div class="popularPost-title">
                            <a href="#">New data recording system to better analyse road accidents</a>
                        </div>
                    </div>
                    <div class="popularPost-content">
                        <div class="popularPost-img">
                            <div class="popularImage">
                                <img src="assets/popular-post/m-blog-1.jpg" alt="">
                            </div>
                            <div class="popularPost-info">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;September 27, 2021&nbsp;&nbsp;</span>
                                <span>2 Comments</span>
                            </div>
                        </div>
                        <div class="popularPost-title">
                            <a href="#">New data recording system to better analyse road accidents</a>
                        </div>
                    </div>
                    <div class="popularPost-content">
                        <div class="popularPost-img">
                            <div class="popularImage">
                                <img src="assets/popular-post/m-blog-1.jpg" alt="">
                            </div>
                            <div class="popularPost-info">
                                <span><i class="fas fa-calendar-alt text-gray"></i>&nbsp;&nbsp;September 27, 2021&nbsp;&nbsp;</span>
                                <span>2 Comments</span>
                            </div>
                        </div>
                        <div class="popularPost-title">
                            <a href="#">New data recording system to better analyse road accidents</a>
                        </div>
                    </div>

                </div>
                <!-- popular posts ended here -->

                <!-- popular Tags starts from here -->
                <div class="popularTags">
                    <h1>Popular Tags</h1>
                    <div class="tags">
                        <span class="tag">Software</span>
                        <span class="tag">Study</span>
                        <span class="tag">Sports</span>
                        <span class="tag">Health</span>
                        <span class="tag">Travel</span>
                        <span class="tag">Travel</span>
                        <span class="tag">Projects</span>
                        <span class="tag">Love</span>
                        <span class="tag">Design</span>
                        <span class="tag">Illustrations</span>
                        <span class="tag">Politics</span>
                    </div>
                </div>
                <!-- newletter starts from here -->
                <div class="newsLetter">
                    <h1>Newsletter</h1>
                    <div class="newsLetter-input">
                        <input type="email" placeholder="Type your email here">
                    </div>
                    <div class="newsLetter-btn">
                        <button>Subscribe</button>
                    </div>
                </div>
                <!-- newsLetter ended here -->
                <!-- newsLetter ended here -->  
            </aside>
        </div>
    </div>

    <!-- trending topic below -->
    <div class="blog">
        <div class="container">
            <h1>Trending Topics</h1>
            <div class="owl-carousel owl-theme blog-post">
                <?php
                $sql = "SELECT * FROM blog_post";
                $query = mysqli_query($conn, $sql);
                $views = array();
                 if(mysqli_num_rows($query)>0){
                     while($value = mysqli_fetch_assoc($query)){
                         $views[] = $value['view'];
                     }
                 } 
                //  print_r($views);
                foreach($query as $q){?>                
                <div class="blog-content">
                <img src="<?php echo 'image/' . $q['img'] ?>" alt="">
                    <h3><?php echo $q['title'] ?></h3>
                    <button class="btn btn-blog"><?php echo "<a href='blogpost/blogpost.php?id=".$q['id']."' >Politics</a>"?></button>
                    <span>2 minutes ago</span>
                </div>                
                
                <?php
        }
            ?>
            </div>
        </div>
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

    <!-- owl carosel scripts file below -->
    <script src="scripts/owl.carousel.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.0.0-beta.3/owl.carousel.min.js"></script>
    <script src="scripts/script.js"></script>
</body>

</html>