<!DOCTYPE html>
<html lang="ko">
<head>
    <title>Document</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0,maximum-scale=1.0, user-scalable=yes">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="../src/scss/vendors/swiper.css">
    <link rel="stylesheet" href="../dist/main.css">
</head>
<body>    
    <?php include './Include/header-black.php';?>

    <div class="now">
        <div class="wrapper">
            <h1 class="now-tit m:tit-lg t:tit-xl d:tit-xxxl unna">
                Yolllley studio now<br/>
                construction from<br/>
                space to furniture<br/>
            </h1>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="now-inner swiper-slide"></div>
                <div class="now-inner swiper-slide"></div>
                <div class="now-inner swiper-slide"></div>
            </div>
            <p class="now-txt m:tit-xxs t:tit-xs d:tit-sm ">cafe OVADOZ , cafe 84㎡</p>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            
            <!-- Add progress -->
            <div class="progress-bar-wrap">
                <div class="progress-bar-inner">
                    <div class="progress-bar">
                        <div class="progress-now"><p>NOW</p></div>
                    </div>
                </div>
                <div class="progress-txt-inner clearfix">
                    <p class="progress-txt m:tit-xxxxxxs t:tit-xxxxxs">April,2019</p>
                    <p class="progress-txt m:tit-xxxxxxs t:tit-xxxxxs">April,2019</p>
                </div>
            </div>

            <div class="btn-inner clearfix">
                <button class="btn btn-w btn-lg">Retouch</button>
                <button class="btn btn-w btn-lg">Add</button>
            </div>
        </div>

        <div class="swiper-container">
            <div class="swiper-wrapper">
                <div class="now-inner swiper-slide"></div>
                <div class="now-inner swiper-slide"></div>
                <div class="now-inner swiper-slide"></div>
            </div>
            <p class="now-txt m:tit-xxs t:tit-xs d:tit-sm ">cafe OVADOZ , cafe 84㎡</p>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            
             <!-- Add progress -->
             <div class="progress-bar-wrap">
                <div class="progress-bar-inner">
                    <div class="progress-bar">
                        <div class="progress-now"><p>NOW</p></div>
                    </div>
                </div>
                <div class="progress-txt-inner clearfix">
                    <p class="progress-txt m:tit-xxxxxxs t:tit-xxxxxs">April,2019</p>
                    <p class="progress-txt m:tit-xxxxxxs t:tit-xxxxxs">April,2019</p>
                </div>
            </div>
            <div class="btn-inner clearfix">
                <button class="btn btn-w btn-lg">Retouch</button>
                <button class="btn btn-w btn-lg">Delete</button>
            </div>
        </div>
    </div>

    <?php include './Include/footer.php';?>

    <script src="https://code.jquery.com/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="/src/js/common.js"></script>
    <script src="../src/js/swiper.min.js"></script>
    <script type="text/javascript">
    (function(){
        var widthbar = $('.progress-bar-inner').width();
        var timeid;
        var day = 30;  //30일간(기간을 설정)
        var n = 0;
        var d;

        var counter = function(){
        var startdate = new Date("2020/03/09") //D-day (시작하는 날짜를 설정한다.)
            var time = function() {
                n++;
                var currentDate = new Date(); //현재 날짜 가져오기
                d = (currentDate.getTime() - startdate.getTime()) / 1000 / 60 / 60 / 24;
                console.log(Math.floor(d-1));
                if((Math.floor((d - 1)) >= day)){                  // 시작하는 날짜가 30일간, 넘어가면 progress-bar 종료를 한다.
                    $('.progress-bar').css('width','100%')
                    return false;                                // 타이밍 제어(종료)하는 메서드
                }
                 
                $('.progress-bar').animate({
                    width: (Math.floor(( d - 1 ) * (widthbar / day - 1) + 12)), //여기서 30은 progress-bar에 1일부터 ~ 30일까지 기준이다.
                }).css( 'overflow','visible');
                    timeId = requestAnimationFrame(time);  // 타이밍 제어(시작)하는 메서드 
                    //console.log(timeId);
            }
            time();
            if(n >= day){                       // 시작하는 날짜가 30일간, 넘어가면 종료를 한다.
                cancelAnimationFrame(timeId);              // 타이밍 제어(종료)하는 메서드
            }
        }
        counter();

    
        var swiper = new Swiper('.swiper-container', {
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + '</span>';
                },
            },
        });
    })();
  </script>
</body>
</html>