<!DOCTYPE html>
<html lang="ko">
<head>
    <title>create account</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0,maximum-scale=1.0, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../dist/main.css">
</head>
<body>    
    <?php include './Include/header-black.php';?>

    <div class="create">
        <div class="create-bg"></div>
        <div class="wrapper">
            <form action="/" method="post" class="clearfix">
                <h1 class="create-tit m:tit-xxl t:tit-xl d:tit-xxxl ">
                    <span>Creative</span>
                    <span>Yolllley account</span>
                </h1>
                <p class="create-txt m:txt-xxxxxs t:txt-xxxxs">
                    If you still don’t have an account, give us<br/>
                    your details.
                </p>
                <article class="info-components">
                    <input class="input input-sm input-block" type="text" placeholder="ID">
                    <input class="input input-sm input-block" type="text" placeholder="Password">
                    <input class="input input-sm input-block" type="text" placeholder="E-mail">
                    <div class="btn btn-sm btn-block btn-b">Create account</div>
                    <div class="info-inner clearfix">
                        <p><a href="/pubilc/password.php" class="btn btn-lg">Have you forgotten your password?</a></p>
                        <p><a href="/pubilc/create.php" class="btn btn-lg">Create account</a></p>
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