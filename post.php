<?php
include_once("./templates/header.php");

if (isset($_GET['id'])) {
    $postId = $_GET['id'];
    $currentPost;

    foreach ($posts as $post) {

        if ($post['id'] == $postId) {

            $currentPost = $post;
        }

    }
}
?>



<main id="post-container">
    <div class="content-container">
        <h1>

            <?= $currentPost['title'] ?>
        </h1>
    </div>

</main>




<?php
include_once("./templates/footer.php");
?>