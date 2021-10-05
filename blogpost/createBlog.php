<?php
include "../database/config.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php
if(isset($_POST['upload_post'])){
    
    $info = $_REQUEST['p_info'];
    $title = $_REQUEST['p_title'];
    $content = $_REQUEST['p_content'];

    //image uploading procedure

    // $img = $_FILES['upload'];
    $filename = $_FILES["upload"]["name"];
    $folder_dir = "../image/";
    if($filename !=''){
        $folder_file = $folder_dir.basename($_FILES['upload']['name']); 
        //extention
        $extention = strtolower(pathinfo($folder_file, PATHINFO_EXTENSION));
        // print_r(($extention));
        $extention_arr = array("jpg", "png", "jpeg");
        // print_r($extention_arr);
        if(in_array($extention, $extention_arr)){
            // conert to base64
            $image_base64 = base64_encode(file_get_contents($_FILES['upload']['tmp_name']));
            $image = "data::image/".$extention.";base64,".$image_base64;
            // print_r($image);
            if(move_uploaded_file($_FILES['upload']['tmp_name'], $folder_file)){

                $insert =  "INSERT INTO blog_post(img, info, title,  content) values ('$filename', '$info', '$title', '$content')";
                mysqli_query($conn, $insert);
            }
                
        }
        
    }
    
    header("Location: ../index.php");
    exit(0);
}
?>

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
    <form class="createPost" action="" method="POST" enctype="multipart/form-data">
            <h1>Post your LifeTails</h1>
            <div class="createPost-content">
                <div class="createPost-title">
                    <div class="createPost-img">
                        <h2>Upload your Image</h2>
                        <input name="upload" type="file">
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
