<?php
include('./partials/header.php');
include('./config/db.php');

$id = isset($_GET['id']) ? $_GET['id'] : '';
// $id = $_GET['id'];
if (!empty($id)) {
    $sql = "SELECT * FROM blogs WHERE blog_id = $id";

    $query = mysqli_query($conn, $sql);

    if ($query) {
        $blog = mysqli_fetch_assoc($query);
    }
}

?>

<?php if (!empty($id)): ?>
    <h3><?php echo $blog['title'] ?></h3>
    <p><?php echo $blog['content'] ?></p>
<?php else: ?>
    <p>No blog</p>
<?php endif; ?>

<?php include('./partials/footer.php') ?>