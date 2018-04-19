<?php require_once('blocks/services/head.html'); ?>
<?php $path_content = count($_GET) > 0 ? 'blocks/pages/' . $_GET['f'] : 'blocks/pages/index.html' ?>

<div class="siteContent">
    <?php require_once('blocks/partials/header.html'); ?>
    <main>
        <?php require_once($path_content); ?>
    </main>
</div>
<?php require_once('blocks/partials/footer.html'); ?>
