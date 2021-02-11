<?php require_once "partials/authheader.php" ?>
    <body class="container--signin">
        <form class="my-form-signin" method="post" action="/auth/register">
            <?php require "partials/flash-messages.php" ?>
            <div class="signin--logo">
                <span>Logo </span>
            </div>
            
            <h2 class="signin--form-tile"><?php echo $data['title']; ?></h2>
            <h6 class="signin-subtitle">Please enter your credentials to proceed.</h6>
            <div class="form-group">
                <label>Email address</label>
                <input type="text" required name="email" class="form-control" placeholder="samplemail@mail.com">
                <!-- <small><a href="/auth/forgot">Forgot password?</a></small> -->
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" required name="password" class="form-control" >
            </div>
            <div class="form-group">
                <label>Confirm Password</label>
                <input type="password" required name="c_password" class="form-control" >
            </div>
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="username" class="form-control" >
            </div>
            <input type="submit" value="Sign up" name="submit" class="btn btn-primary sign-btn">
            <span class="sign-up-text">
                <span>Already have an account? </span>
                <a href="/auth/login">Sign in</a>
            </span>
        </form>
    </body>
</html>
