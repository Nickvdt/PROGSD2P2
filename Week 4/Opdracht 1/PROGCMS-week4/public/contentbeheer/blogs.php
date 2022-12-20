<?php include '../../private/init.php'; ?>
<?php include SHARED_PATH . '/header_index.php'; ?>
<h1>
    Blogs
</h1>
    <?php
    lees_bestand('blogs.txt');
    ?>
<?php include SHARED_PATH . '/footer_index.php'; ?>
