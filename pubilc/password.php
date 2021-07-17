<!DOCTYPE html>
<html lang="ko">
<head>
    <title>password</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0,maximum-scale=1.0, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../dist/main.css">
</head>
<body>    
    <?php include './Include/header-black.php';?>

    <div class="password">
        <div class="password-bg"></div>
        <div class="wrapper">
            <form action="/" method="post" class="clearfix">
                <h1 class="password-tit m:tit-xxl t:tit-xl d:tit-xxxl ">
                    <span> Have you forgotten</span>
                    <span>your password?</span> 
                </h1>
                <p class="password-txt m:txt-xxxxxs t:txt-xxxxs">
                    If you’ve forgotten your password, enter your 
                    e-mail address and we’ll send you an e-mail 
                    telling you how to recover it.
                </p>
                <article class="info-components">
                    <input class="input input-sm input-block" type="text" placeholder="E-mail">
                    <div class="btn btn-sm btn-block btn-b">Find password</div>
                    <div class="info-inner clearfix">
                        <p><a href="/pubilc/create.php" class="btn btn-lg">Creative account</a></p>
                        <p><a href="/pubilc/login.php" class="btn btn-lg">Log-in</a></p>
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