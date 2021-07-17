<!DOCTYPE html>
<html lang="ko">
<head>
    <title>login</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0,maximum-scale=1.0, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../dist/main.css">
</head>
<body>    
    <?php include './Include/header-black.php';?>

    <div class="login">
        <div class="login-bg"></div>
        <div class="wrapper">
            <form action="/" method="post" class="clearfix">
                <h1 class="login-tit m:tit-xxl t:tit-xl d:tit-xxxl ">
                    <span>Welcome to</span>
                    <span>Yolllley studio</span>
                </h1>
                <p class="login-txt m:txt-xxxxxs t:txt-xxxxs">
                    Please enter your ID and Password to<br/> identify yourself.
                </p>
                <article class="info-components">
                    <input class="input input-sm input-block" type="text" placeholder="ID">
                    <input class="input input-sm input-block" type="text" placeholder="Password">
                    <div class="btn btn-sm btn-block btn-b unna">Log in</div>
                    <div class="info-inner clearfix">
                        <p><a href="/yolllley/pubilc/password.php" class="btn btn-lg unna">Have you forgotten your password?</a></p>
                        <p><a href="/yolllley/pubilc/create.php" class="btn btn-lg unna">Create account</a></p>
                    </div>
                </article>
            </form>
        </div>
    </div>
    
    <?php include './Include/footer.php';?>
    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="/src/js/common.js"></script>
</body>
</html>