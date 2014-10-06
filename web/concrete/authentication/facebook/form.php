<?php
defined('C5_EXECUTE') or die('Access Denied');
if (isset($error)) {
    ?>
    <div class="alert alert-danger"><?= $error ?></div>
    <?php
}
if (isset($message)) {
    ?>
    <div class="alert alert-success"><?= $message ?></div>
<?php
}

$user = new User;

if ($user->isLoggedIn()) {
    ?>
    <a href="<?= \URL::to('/system/authentication/facebook/attempt_attach'); ?>">
        <?php echo t('Attach a Facebook account')?>
    </a>
    <?php
} else {
    ?>
    <a href="<?= \URL::to('/system/authentication/facebook/attempt_auth'); ?>">
        <?php echo t('Log in With Facebook')?>
    </a>
    <?php
}
