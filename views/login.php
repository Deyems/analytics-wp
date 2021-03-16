<?php require "partials/authheader.php" ?>
    <body class="container--signin">
        <form class="my-form" method="post" action="/auth/login">
            <?php require "partials/flash-messages.php" ?>

            <div class="signin--logo">
                <span>Logo</span>
            </div>

            <h2 class="signin--form-tile"><?php echo $data['title']; ?></h2>
            <h6 class="signin-subtitle">Please enter your credentials to proceed.</h6>
            <div class="form-group">
                <label>Email address</label>
                <input type="text" name="email" class="form-control" placeholder="samplemail@mail.com">
                <small><a href="/auth/forgot">Forgot password?</a></small>
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" class="form-control" />
            </div>
            <input type="submit" value="Sign in" name="submit" class="btn btn-primary sign-btn" />
            <span class="sign-up-text">
                <span>Dont’ have an account? </span>
                <a href="/auth/register">Sign up</a>
            </span>
        </form>
    </body>
</html>
