<?php include '../../private/init.php'; ?>
<?php include SHARED_PATH . '/header_index.php'; ?>
<h1>
    F1 ABU DHABI GRAND PRIX 2022 - QUALIFYING RESULTS
</h1>
<section><img src="img/f1.webp" alt="" width="300px"></section>
    <?php
    lees_bestand('f1.txt');
    ?>
<?php include SHARED_PATH . '/footer_index.php'; ?>
