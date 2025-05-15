<?php
    include_once("templates/header.php");

    if(isset($_GET["id"])) {
        $postId = $_GET["id"];
        $currentPost;

        foreach($posts as $post) {
            if($post["id"] == $postId) {
                $currentPost = $post;
            }
        }
    }
?>
    
<?php
    include_once("templates/footer.php")
?>