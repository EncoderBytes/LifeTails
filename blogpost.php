<?php
        include('database/config.php'); 
        include('include/header.php'); 
        $sql = "SELECT * FROM blog_post";

        $id = $_GET['id'];
        // print_r($id);

        $query = mysqli_query($conn, $sql);
        // print_r($query);
        $lengthOfQuery = mysqli_num_rows($query);
        // print_r($lengthOfQuery);
        for($i=0; $i<$lengthOfQuery; $i++){
            $row =  mysqli_fetch_array($query);
            if ($id == $row['id'])
             break;
        }
        // print_r($row);
?>
<?php

            // $conn = new mysqli("localhost","root","","life_tails");
            include('database/config.php'); 
        if(isset($_POST['post'])){
        $input = $_REQUEST['add_comment'];
    
        $insert =  "INSERT INTO comments (comment) VALUES ('$input')";
        mysqli_query($conn, $insert);
    }
    // print_r($result);
    $sql = "SELECT * FROM comments";
    $query = mysqli_query($conn, $sql);
            ?>
 <hr>
    

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
                    <img src="<?php echo 'image/' . $row['img'] ?>" alt="image here">
                    </div>               
                </div>

                <p>
                    <?php echo $row['content']?>
                </p>
    
            </div>
            <div class="comments-wrapper">
                <h1>Throw your comments</h1>
            <form action="" method="POST">
            <div class="throwComment">
                <div class="addComment">
                    <input type="text" name="add_comment" placeholder="What are your thoughts">
                </div>
                <div class="postComment">
                    <button name="post">Post</button>
                </div>
            </div>
            </form>
            <?php foreach($query as $q){?> 
            <div class="comments">
                <div class="userImg">   
                    <img src="../assets/x.jpg" alt="">
                </div>
                <div class="userName">
                    <h2>Asanaid Ahmad</h2></h2>
                </div>
                <div class="userComment">
                    <p><?php echo $q['comment'] ?></p>
                </div>
            </div><hr>
            <?php
            }
            ?>
            </div>
        </div>
        
        <aside>
            
            <div class="recentposts">
                <h1>Recent Posts</h1>
                    <div class="recentpost-title">
                        <div class="recentpost-img">
                            <img src="assets/popular-post/m-blog-1.jpg" alt="">
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
    
    <!-- footer -->
    <?php
    include('include/footer.php');
    ?>