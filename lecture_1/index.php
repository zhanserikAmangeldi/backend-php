<?php echo "Hello world!"; ?>

<h1><?php echo "Hello world!"; ?></h1>

<h1><?= "Hello world!"; ?></h1>

<?php
$title = "Lecture 1";
$numPosts = 3;
define("MIN_NUM_POSTS", 0); // constant
const MAX_NUM_POSTS = 100;
$hasPosts = $numPosts > MIN_NUM_POSTS;
$numPostsDisplay = "\"$numPosts\" posts" ;
?>

<h1><?= $title; ?></h1>
<p><?= gettype($title); ?></p>
<h2><?= $numPosts; ?></h2>
<p><?= gettype($numPosts); ?></p>

<h2><?= $numPostsDisplay ?></h2>

<h3>Minimum: <?= MIN_NUM_POSTS; ?></h3>
<h3>Maximum: <?= MAX_NUM_POSTS; ?></h3>

<h3>There are Posts: <?php var_dump($hasPosts); ?></h3>

<?php
if ($numPosts == 3) {
    echo 'There are exactly 3 posts';
} elseif ($hasPosts) {
    echo 'Post exists';
} else {
    echo 'There are no posts';
}
?>

<?php if ($hasPosts): ?>
    <?php if($numPosts == 3): ?>
        There are exactly 3 posts
    <?php else: ?>
        Posts exists
    <?php endif; ?>
<?php else: ?>
    There are no posts
<?php endif; ?>

<?php echo $hasPosts ? 'Post exists' : 'There are no posts'; ?>
<?php echo ($numPosts == 3) ? 'There are exactly 3 posts' : ($hasPosts ? 'Post exists' : 'There are no posts'); ?>
