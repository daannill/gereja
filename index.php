<?php 

require_once 'app/init.php';
require_once 'app/actions/indexAction.php';

$title = 'Judul Halaman';
$css = 'css.css';
$js = 'js.js';

require_once 'app/templates/main/header.php';
require_once 'app/templates/partials/nav.php';
?>

 <?= $halo ?>

<?php
require_once 'app/templates/main/footer.php';
?>