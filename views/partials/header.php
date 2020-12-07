<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title']; ?></title>
    <link rel="stylesheet" type="text/css" href="css/scss/main.min.css" />
    <script src="/scripts/<?php echo $data['script']; ?>" defer></script>
</head>
<body>
<div class="d-flex">
    <div class="dashboard-sidebar">
        <div class="menu">
            <span class="logo-white">
                
            </span>

            <?php if($data['title'] == 'Dashboard'): ?>
                <span class="menu-item active-one">
                    <span>
                        <img src="uploads/images/home.svg" alt="dashboard">
                    </span>
                </span>
            <?php else: ?>
                <span class="menu-item">
                    <a href="/">
                        <img src="uploads/images/home.svg" alt="dashboard">
                    </a>
                </span>
            <?php endif; ?>

            <?php if($data['title'] == 'Author Dashboard'): ?>
                <span class="menu-item active-one">
                    <span>
                        <img src="uploads/images/people.svg" alt="author">
                    </span>
                </span>
            <?php else: ?>
                <span class="menu-item">
                    <a href="/author" >
                        <img src="uploads/images/people.svg" alt="author">
                    </a>
                </span>
            <?php endif; ?>

            <?php if($data['title'] == 'Settings Dashboard'): ?>
                <span class="menu-item active-one">
                    <span>
                        <img src="uploads/images/settings.svg" alt="settings">
                    </span>
                </span>
            <?php else: ?>
                <span class="menu-item">
                    <a href="/settings">
                        <img src="uploads/images/settings.svg" alt="settings">
                    </a>
                </span>
            <?php endif; ?>

        </div>
        <div class="signout">
            <span class="signout-item">
                <a href="/">
                    <img class="signout-item-img" src="uploads/images/arrowbar.svg" alt="arrow">
                    <img class="signout-item-img" src="uploads/images/arrowicon.svg" alt="bar">
                </a>
            </span>
        </div>
    </div>