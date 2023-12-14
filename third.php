<?php
$blog_posts=array(array("title"=>"First Post",
                        "content"=>"This the content of the first post.",
                        "publication_date"=>"2023-10-26",),
                        array(
                        "title"=>"Second Post",
                        "content"=>"This is the content of the second post.",
                        "publication_date"=>"2023-10-27",

                        ),
                        array("title"=>"Third Post",
                        "content"=>"This is the content of the third post.",
                        "publication_date"=>"2023-10-23",
                    ),





);

//sort the blog posts by publication date inj decencing order
usort($blog_posts,function($a,$b){
    return strtotime($b['publication_date'])-strtotime($a['publication_date']);
});

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>

</head>
<body>
    <h1>Blog</h1>
    <hr>

    <?php foreach($blog_post as $post): ?>
        <div class="blog-post">
            <h2><?php echo $post['title']; ?></h2>
            <p><?php echo $post['content']; ?></p>
            <span class="publication-date">Published on:<?php echo date("F d, Y",strtotime($post['publication_date'])); ?></span>
        </div>
        <hr>

    <?php endforeach; ?>


</body>



</html>
