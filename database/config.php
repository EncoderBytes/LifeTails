<?php

$conn = new mysqli("localhost","root","","life_tails");

// // Check connection
// if(!$conn){
//     echo 'not connected'
// }
// // $dbServer = "localhost";
// // $dbUsername = "";
// // $dbPassword = "";
// // $dbName = "life_tails";
// $connect = mysqli_connect ($dbServer, $dbUsername, $dbPassword, $dbName);

// print_r($query);
// die();

?>
<?php
if(isset($_REQUEST['upload_post'])){
    
    $filename = $_FILES["p_image"]["name"];
    $tempname = $_FILES["p_image"]["tmp_name"];    
        $folder = "image/".$filename;
          
        // Now let's move the uploaded image into the folder: image
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }else{
            $msg = "Failed to upload image";
      }
    $img = $_REQUEST['p_image'];
    $info = $_REQUEST['p_info'];
    $title = $_REQUEST['p_title'];
    $content = $_REQUEST['p_content'];

    $insert =  "INSERT INTO blog_post(img, info, title,  content) values ('$img', '$info', '$title', '$content')";
    mysqli_query($conn, $insert);

    // header("Location: ../index.php");
    // exit(0);
}
?>