<?php
include('database/config.php');
include('include/header.php');
// include "blogpost/createBlog.php"
static $pid = 0;
?>

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
                            <button name="btn"><?php echo "<a href='blogpost.php?id=".$q['id']."' >Read More</a>"?></button>
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
                            <span> (12)</span>
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
        
    <!-- footer -->
    <?php
    include('include/footer.php');
    ?>