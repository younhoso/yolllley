<!DOCTYPE html>
<html lang="ko">
<head>
    <title>press</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0,maximum-scale=1.0, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../src/scss/vendors/swiper.css">
    <link rel="stylesheet" href="../src/scss/vendors/fancybox.css">
    <link rel="stylesheet" href="../dist/main.css">
</head>
<body>    
    <?php include './Include/header-black.php';?>
    
    <div class="press">
        <div class="wrapper">
            <h1 class="m:tit-lg t:tit-xl d:tit-xxxxxl unna">
                Yolllley studio press<br/>
                construction from<br/>
                space to furniture<br/>
            </h1>
        </div>
        <div class="swiper-container press-inner">
            <div class="swiper-wrapper">
                <div class="item swiper-slide">
                    <a data-fancybox href="http://yolllley.triplexlab.co.kr/src/imgs/press-thub2.png">
                        <img class="thumb" src="http://yolllley.triplexlab.co.kr/src/imgs/press-thub2.png" alt="">
                        
                    </a>
                </div>
                <div class="item swiper-slide">
                    <a data-fancybox href="http://yolllley.triplexlab.co.kr/src/imgs/press-thub.png">
                        <img class="thumb" src="http://yolllley.triplexlab.co.kr/src/imgs/press-thub.png" alt="">
                        <div class="press-desc">
                            <p class="m:tit-xs unna">Louis vuitton _ cuenco furniture</p>
                            <p class="m:txt-xxxxxs ">April,2019</p>
                        </div>
                    </a>
                </div>  
                <div class="item swiper-slide">
                    <a data-fancybox href="http://yolllley.triplexlab.co.kr/src/imgs/press-thub2.png">
                        <img class="thumb" src="http://yolllley.triplexlab.co.kr/src/imgs/press-thub2.png" alt="">
                        <div class="press-desc">
                            <p class="m:tit-xs unna">Louis vuitton _ cuenco furniture</p>
                            <p class="m:txt-xxxxxs ">April,2019</p>
                        </div>
                    </a>
                </div>
                <div class="item swiper-slide">
                    <a data-fancybox  href="http://yolllley.triplexlab.co.kr/src/imgs/press-thub.png">
                        <img class="thumb" src="http://yolllley.triplexlab.co.kr/src/imgs/press-thub.png" alt="">
                        <div class="press-desc">
                            <p class="m:tit-xs unna">Louis vuitton _ cuenco furniture</p>
                            <p class="m:txt-xxxxxs ">April,2019</p>
                        </div>
                    </a>
                </div>  
                <div class="item swiper-slide">
                    <a data-fancybox href="http://yolllley.triplexlab.co.kr/src/imgs/press-thub2.png">
                        <img class="thumb" src="http://yolllley.triplexlab.co.kr/src/imgs/press-thub2.png" alt="">
                        <div class="press-desc">
                            <p class="m:tit-xs unna">Louis vuitton _ cuenco furniture</p>
                            <p class="m:txt-xxxxxs ">April,2019</p>
                        </div>
                    </a>
                </div>
                <div class="item swiper-slide">
                    <a  data-fancybox href="http://yolllley.triplexlab.co.kr/src/imgs/press-thub.png">
                        <img class="thumb" src="http://yolllley.triplexlab.co.kr/src/imgs/press-thub.png" alt="">
                        <div class="press-desc">
                            <p class="m:tit-xs unna">Louis vuitton _ cuenco furniture</p>
                            <p class="m:txt-xxxxxs ">April,2019</p>
                        </div>
                    </a>
                </div>  
            </div>
            <!-- Add Pagination -->
            <div class="press-pagination swiper-scrollbar"></div>
             <!-- Add Arrows -->
            <div class="swiper-next">
                <i class="material-icons">
                    arrow_forward
                </i>
            </div>
            <div class="swiper-prev">
                <i class="material-icons">
                    arrow_back
                </i>
            </div>
        </div>
    </div>

    <?php include './Include/footer.php';?>
    

    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="/src/js/common.js"></script>
    <script type="text/javascript" src="/src/js/fancybox.min.js"></script>
    <script type="text/javascript" src="/src/js/swiper.min.js"></script>
    <script>
    $(function(){
        var swiper = new Swiper('.swiper-container', {
            scrollbar: {
                el: '.swiper-scrollbar',
                hide: false,
            },
            navigation: {
                nextEl: '.swiper-next',
                prevEl: '.swiper-prev',
            },
                slidesPerView: 'auto'
        });
    });
    </script>
</body>
</html>