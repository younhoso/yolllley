<!DOCTYPE html>
<html lang="ko">
<head>
    <title>schedulelist_add</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0,maximum-scale=1.0, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../src/scss/vendors/swiper.css">
    <link rel="stylesheet" href="../dist/main.css">
</head>
<body>    
    <main class="header theme-black">
        <div class="header-inner">
            <header class="m:header">
                <div class="wrapper js-hander">
                    <div class="header-line">
                        <a href="#0" class="btn btn-md btn-logo header-logo"><img src="http://yolllley.triplexlab.co.kr/src/imgs/logo-b.png" alt="로고"></a>
                        <button class="btn btn-md btn-nav">
                            <i class="material-icons m:txt-md">menu</i>
                        </button>
                    </div>

                    <nav class="mobile-nav">
                        <div class="header-line">
                            <a href="#0" class="btn btn-md btn-logo header-logo"><img src="http://yolllley.triplexlab.co.kr/src/imgs/logo-b.png" alt="로고"></a>
                            <button class="btn btn-md btn-nav">
                                <i class="material-icons">clear</i>
                            </button>
                        </div>
                        <ul class="items">
                            <li class="item"><a href="#0" class="btn btn-md m:txt-xs t:txt-sm ">Experience</a></li class="item">
                            <li class="item"><a href="#0" class="btn btn-md m:txt-xs t:txt-sm ">Now</a></li>
                            <li class="item"><a href="#0" class="btn btn-md m:txt-xs t:txt-sm ">About us</a></li>
                            <li class="item"><a href="#0" class="btn btn-md m:txt-xs t:txt-sm ">Contact us</a></li>
                            <li class="item"><a href="#0" class="btn btn-md m:txt-xs t:txt-sm ">Press</a></li>
                            <li class="item"><a href="#0" class="btn btn-md m:txt-xs t:txt-sm ">People</a></li>
                        </ul>
                        <ul class="items clearfix">
                            <li class="item"><a href="#0" class="btn btn-md m:txt-xs t:txt-sm ">Log-in</a></li>
                            <li class="item"><a href="#0" class="btn btn-md m:txt-xs t:txt-sm ">Instargram</a></li>
                        </ul>
                    </nav>
                </div>
                
            </header>
            <header class="d:header">
                <div class="wrapper">
                    <div class="header-line">
                    <div class="nav-inner">
                        <a href="#0" class="btn btn-md btn-logo header-logo"><img src="http://yolllley.triplexlab.co.kr/src/imgs/logo-b.png" alt="로고"></a>
                        <nav class="clearfix">
                            <ul class="items">
                                <li class="item"><a href="#0" class="btn btn-md">Experience</a></li class="item">
                                <li class="item"><a href="#0" class="btn btn-md">Now</a></li>
                                <li class="item"><a href="#0" class="btn btn-md">About us</a></li>
                                <li class="item"><a href="#0" class="btn btn-md">Contact us</a></li>
                                <li class="item"><a href="#0" class="btn btn-md">Press</a></li>
                                <li class="item"><a href="#0" class="btn btn-md">People</a></li>
                            </ul>
                            <ul class="items">
                                <li class="item"><a href="#0" class="btn btn-md">Log-in</a></li>
                                <li class="item"><a href="#0" class="btn btn-md">Instargram</a></li>
                            </ul>
                        </nav>
                    </div>
                    </div>
                </div>
            </header>
        </div>
    </main>

    <div class="scheduleList_add">
        <div class="wrapper">
            <h1 class="scheduleList-tit m:tit-xxl t:tit-xl d:tit-xxxl unna">
                Time schedule<br/>
                Add
            </h1>
            <div class="scheduleList-add__form">
                <form action="/" method="post">
                    <div class="scheduleList-add__div">
                        <input class="input input-sm input-block" type="text" placeholder="이름*">
                    </div>
                    <div class="scheduleList-add__div">
                        <div class="scheduleList-add__inner">
                            <input class="input input-sm input-block" type="text" placeholder="시작일자*">
                        </div>
                        <div class="scheduleList-add__inner">
                            <input class="input input-sm input-block" type="text" placeholder="마무리 일자*">
                        </div>
                    </div>
                    <div class="textarea-txt__box scheduleList-add__div">
                        <textarea class="textarea-txt input input-block" name="fragment" cols="" rows="10" placeholder="내용*"></textarea>
                    </div>
                    <div class="btn-inner scheduleList-add__div clearfix">
                        <div>
                            <button class="btn btn-w">Cancel</button>
                        </div>
                        <div>
                            <button class="btn btn-b">Add schedule</button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    
    <footer class="footer">
        <div class="wrapper">
            <div class="footer-inner clearfix">
                <div class="footer-tit">
                    <p><a href="#0" class="m:tit-sm t:tit-lg d:tit-md">Experience</a></p> 
                    <p><a href="#0" class="m:tit-sm t:tit-lg d:tit-md">Contact us</a></p>
                </div>
                <div class="footer-tit">
                    <p><a href="#0" class="m:tit-sm t:tit-lg d:tit-md"><span class="m:tit-xxxs t:tit-xxxs">YOLLLLEY STUDIO</span></a></p>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="/src/js/common.js"></script>
</body>
</html>