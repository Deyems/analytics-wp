<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['title']; ?></title>
    <link rel="stylesheet" type="text/css" href="/css/scss/main.min.css" />
</head>
    <body class="container--signin">
        <form class="my-form" method="post" action="/auth/login">
        <div class="signin--logo">
            <span>Logo <?php //echo $abah ?>
            </span>
        </div>
        <ul>
            <?php //foreach($items as $item): ?>
            <li><?php //echo $item; ?></li>
            <?php //endforeach; ?>
        </ul>
        <h2 class="signin--form-tile"><?php echo $data['title']; ?></h2>
        <h6 class="signin-subtitle">Please enter your credentials to proceed.</h6>
        <div class="form-group">
            <label>Email address</label>
            <input type="text" name="email" class="form-control" placeholder="samplemail@mail.com">
            <small>Forgot password?</small>
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" >
        </div>
        <input type="submit" value="Sign in" name="submit" class="btn btn-primary sign-btn">
        <span class="sign-up-text">
            <span>Dont’ have an account? </span>
            <a href="/">Sign up</a>
        </span>
        </form>
    </body>
</html>
