<?php if($error = getFlash('error')): ?>
    <p class="alert alert-danger"><?php echo $error; ?> </p>
<?php endif; ?>

<?php if($info = getFlash('info')): ?>
    <p class="alert alert-info"><?php echo $info; ?> </p>
<?php endif; ?>

<?php if($success = getFlash('success')): ?>
    <p class="alert alert-success"><?php echo $success; ?> </p>
<?php endif; ?>
