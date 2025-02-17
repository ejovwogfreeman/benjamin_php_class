<?php
include('./partials/header.php');
include('./config/db.php');
// echo readfile('text.txt');

// write sql to get all blogs;
$sql = "SELECT * FROM blogs";

// execute query;
$result = mysqli_query($conn, $sql);

// check if the query returned a result;
if (mysqli_num_rows($result) > 0) {
    // $blogs = mysqli_fetch_assoc($result);
    $blogs = mysqli_fetch_all($result, MYSQLI_ASSOC);
    // var_dump($blogs);
}

?>
<h3>All Blogs</h3>
<?php foreach ($blogs as $blog): ?>
    <div class="card p-2 mb-2">
        <h4><?php echo ucwords($blog['title']) ?></h4>
        <p><?php echo ucfirst($blog['content']) ?>... <a href="detail.php?id=<?php echo $blog['blog_id'] ?>">read more</a></p>
    </div>
<?php endforeach ?>
<?php include('./partials/footer.php') ?>